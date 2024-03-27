<?php

namespace App\Http\Controllers;
use App\Models\sub_categoriesModel;
use App\Models\categoriesModel;
Use Str;
Use Auth;



use Illuminate\Http\Request;

class sub_categorycontroller extends Controller
{
    public function __construct()
    {
      $this->middleware('permission:view sub_categories', ['only'=>['list']]);
      $this->middleware('permission:create sub_categories', ['only'=>['add','insert']]);
      $this->middleware('permission:update sub_categories', ['only'=>['update','edit']]);
      $this->middleware('permission:delete sub_categories', ['only'=>['destroy']]);
  
    }
    public function list(){
        $data['getRecord'] = sub_categoriesModel::getRecord();
        return view("admin.tables.sub_categories", $data);
    }
    public function add(){
        $data['getcategory'] =categoriesModel::getRecord();
        $data['header_title']='Sub category';
        return view("admin.fiche.fiche-sub_categories",$data);
    }
    public function insert2(request $request){

        $title=trim($request->title);
        $sub_categories=new sub_categoriesModel;
        $sub_categories->title=['en'=>$request->title, 'fr'=>$request->title_fr];
        $sub_categories->category = $request->category;
        $sub_categories->description=['en'=>$request->description, 'fr'=>$request->description_fr];
        $sub_categories->image= trim($request->image);
        $sub_categories->created_by = Auth::User()->id;
        $sub_categories->save();

        $slug=Str::slug($title,'-');
        $checkSlug=sub_categoriesModel::checkSlug($slug);
        if(empty($checkSlug)){
            $sub_categories->slug=$slug;
            $sub_categories->save();
        }
        else{
            $new_slug=$slug. '-'.$sub_categories->id;
            $sub_categories->slug=$new_slug;
            $sub_categories->save();
        }

        
      
       return redirect('/tables/sub_categories');
    }
    public function edit($id){
        
        $sub_categories = sub_categoriesModel::getSingle($id);
        $getcategory = categoriesModel::getRecord();
        return view("admin.fiche.fiche-sub_categories-edit", compact('sub_categories','getcategory'));
       

        
    }
    public function update( request $request, $id){ 
       
       
        $sub_categories=sub_categoriesModel::getSingle($id);
        
        $sub_categories->title = $request->input('title');
        $sub_categories->description = $request->input('description');
        $sub_categories->category = $request->input('category');
        $sub_categories->setTranslation('title', 'fr', $request->input('title_fr'));
        $sub_categories->setTranslation('description', 'fr', $request->input('description_fr'));
        $sub_categories->image = $request->input('image');
        
        $sub_categories->update();

     
        return redirect('/tables/sub_categories');

    }
    public function destroy($id){ 
        $sub_categories=sub_categoriesModel::getSingle($id);
        $sub_categories->delete();
        return redirect()->back();
    }
}
