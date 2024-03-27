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

        $title=trim($request->title);
        $categories=new categoriesModel;
        $categories->title=['en'=>$request->title, 'fr'=>$request->title_fr];
        $categories->description=['en'=>$request->description, 'fr'=>$request->description_fr];
        $categories->image= trim($request->image);
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
        $categories->setTranslation('title', 'fr', $request->input('title_fr'));
        $categories->setTranslation('description', 'fr', $request->input('description_fr'));
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

