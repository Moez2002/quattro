<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categoriesModel;
Use Str;
Use Auth;

class categorycontroller extends Controller
{
    public function __construct()
    {
      $this->middleware('permission:view categories', ['only'=>['list']]);
      $this->middleware('permission:create categories', ['only'=>['add','insert1']]);
      $this->middleware('permission:update categories', ['only'=>['update','edit']]);
      $this->middleware('permission:delete categories', ['only'=>['destroy']]);
  
    }
    public function list(){
        $data['getRecord'] = categoriesModel::getRecord();
        return view("admin.tables.categories", $data);
    }
    public function add(){
        $categories =categoriesModel::whereNull('category_id')->get();
        return view("admin.fiche.fiche-categories",compact('categories'));
    }
    public function insert1(request $request){
        $imageName='';

        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('categories'), $imageName); 
        }

        $name=trim($request->name);
        $categories=new categoriesModel;
        $categories->name=['en'=>$request->name, 'fr'=>$request->name_fr];
        $categories->mini_description=['en'=>$request->mini_description, 'fr'=>$request->mini_description_fr];
        $categories->description=['en'=>$request->description, 'fr'=>$request->description_fr];
        $categories->image = $imageName;
        $categories->created_by = Auth::User()->id;
        $categories->save();

        if ($request->has('category_id')) {
            $categories->category_id = $request->category_id;
        } else {
            // If no parent category is selected, set category_id to null
            $categories->category_id = null;
        }

        $slug=Str::slug($name,'-');
        $checkSlug=categoriesModel::checkSlug($slug);
        if(empty($checkSlug)){
            $categories->slug=$slug;
            $categories->save();
        }
        else{
            $new_slug=$slug. '-'.$categories->id;
            $categories->slug=$new_slug;
            $categories->save();
        }

        
      
       return redirect('/tables/categories');
    } 
    public function edit($id){
        $categories = categoriesModel::getSingle($id);
        $parentCategories = categoriesModel::whereNull('category_id')->get();
        return view("admin.fiche.fiche-categories-edit", compact('categories','parentCategories'));
       

        
    }
    public function update(Request $request, $id)
    { 
        $categories = categoriesModel::getSingle($id);
        
        $categories->name = $request->input('name');
        $categories->description = $request->input('description');
        $categories->mini_description = $request->input('mini_description');
        $categories->setTranslation('description', 'fr', $request->input('description_fr'));
    
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('categories'), $imageName); 
    
            $categories->image = $imageName;
        }
        
        $categories->save();

    
        return redirect('/tables/categories');
    }
     public function destroy($id){ 
        $categories=categoriesModel::getSingle($id);
        $categories->delete();
        return redirect()->back();
    }
 


}

