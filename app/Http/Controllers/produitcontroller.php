<?php

namespace App\Http\Controllers;
use App\Models\sub_categoriesModel;
use App\Models\categoriesModel;
use App\Models\produitModel;
Use Str;
Use Auth;

use Illuminate\Http\Request;

class produitcontroller extends Controller
{
    public function __construct()
    {
      $this->middleware('permission:view produit', ['only'=>['list']]);
      $this->middleware('permission:create produit', ['only'=>['add','insert']]);
      $this->middleware('permission:update produit', ['only'=>['update','edit']]);
      $this->middleware('permission:delete produit', ['only'=>['destroy']]);
  
    }
    public function list(){
        $data['getRecord'] = produitModel::getRecord();
        return view("admin.tables.produit", $data);
    }
    public function add(){
        $data['getcategory'] =categoriesModel::getRecord();
        $data['getsubcategory'] =sub_categoriesModel::getRecord();
        $data['header_title']='produit';
        return view("admin.fiche.fiche-produit",$data);
    }
    public function insert3(request $request){

        $title=trim($request->title);
        $produit=new produitModel;
        $produit->title=['en'=>$request->title, 'fr'=>$request->title_fr];
        $produit->category = $request->category;
        $produit->sub_category = $request->sub_category;
        $produit->description=['en'=>$request->description, 'fr'=>$request->description_fr];
        $produit->image=trim($request->image);
        $produit->created_by = Auth::User()->id;
        $produit->save();

        $slug=Str::slug($title,'-');
        $checkSlug=produitModel::checkSlug($slug);
        if(empty($checkSlug)){
            $produit->slug=$slug;
            $produit->save();
        }
        else{
            $new_slug=$slug. '-'.$produit->id;
            $produit->slug=$new_slug;
            $produit->save();
        }

        
      
       return redirect('/tables/produit');
    }
    public function edit($id){
        
        $produit = produitModel::getSingle($id);
        $getcategory = categoriesModel::getRecord();
        $getsubcategory = sub_categoriesModel::getRecord();
        return view("admin.fiche.fiche-produit-edit", compact('produit','getcategory','getsubcategory'));
       

        
    }
    public function update( request $request, $id){ 
       
       
        $produit=produitModel::getSingle($id);
        
        $produit->title = $request->input('title');
        $produit->description = $request->input('description');
        $produit->category = $request->input('category');
        $produit->setTranslation('title', 'fr', $request->input('title_fr'));
        $produit->setTranslation('description', 'fr', $request->input('description_fr'));
        $produit->image = $request->input('image');
        
        $produit->update();

     
        return redirect('/tables/produit');

    }
    public function destroy($id){ 
        $produit=produitModel::getSingle($id);
        $produit->delete();
        return redirect()->back();
    }
}
