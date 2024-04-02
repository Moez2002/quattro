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
      $this->middleware('permission:create categories', ['only'=>['add','insert']]);
      $this->middleware('permission:update categories', ['only'=>['update','edit']]);
      $this->middleware('permission:delete categories', ['only'=>['destroy']]);
  
    }
    public function list(){
        $data['getRecord'] = categoriesModel::getRecord();
        return view("admin.tables.categories", $data);
    }
    public function add(){
        return view("admin.fiche.fiche-categories");
    }
    public function insert1(request $request){

        $request->validate([
            // Add validation rules for other fields as needed
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation for image upload
        ]);

    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); // Generate unique file name
            $image->move(public_path('categories'), $imageName); // Move the uploaded file to the public/categories directory
        }

        $title=trim($request->title);
        $categories=new categoriesModel;
        $categories->title=['en'=>$request->title, 'fr'=>$request->title_fr];
        $categories->description=['en'=>$request->description, 'fr'=>$request->description_fr];
        $categories->sub_category=['en'=>$request->sub_category, 'fr'=>$request->sub_category_fr];
        $categories->image = $imageName;
        $categories->created_by = Auth::User()->id;
        $categories->save();

        $slug=Str::slug($title,'-');
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
        return view("admin.fiche.fiche-categories-edit", compact('categories'));
       

        
    }
    public function update( request $request, $id){ 
       
       
        $categories=categoriesModel::getSingle($id);
        
        $categories->title = $request->input('title');
        $categories->description = $request->input('description');
        $categories->sub_category = $request->input('sub_category');
        $categories->setTranslation('title', 'fr', $request->input('title_fr'));
        $categories->setTranslation('description', 'fr', $request->input('description_fr'));
        $categories->setTranslation('sub_category', 'fr', $request->input('sub_category_fr'));
        $categories->image = $request->input('image');
        
        $categories->update();

     
        return redirect('/tables/categories');

    }
    public function destroy($id){ 
        $categories=categoriesModel::getSingle($id);
        $categories->delete();
        return redirect()->back();
    }
 


}

