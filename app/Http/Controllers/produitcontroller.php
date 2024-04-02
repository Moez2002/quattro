<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
use App\Models\categoriesModel;
use App\Models\produitModel;
use App\Models\produitImage;
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
        $data['header_title']='produit';
        return view("admin.fiche.fiche-produit",$data);
    }
    public function insert3(Request $request){
        $title = trim($request->title);
        $produit = new produitModel;
        $produit->title = ['en' => $request->title, 'fr' => $request->title_fr];
        $produit->category = $request->category;
        $produit->sub_category = $request->sub_category;
        $produit->description = ['en' => $request->description, 'fr' => $request->description_fr];
        $produit->created_by = Auth::user()->id;
        $produit->save();
    
  // Create a gallery folder
  $galleryNumber = $this->getGalleryNumber();
  $galleryPath = public_path('gallery' . $galleryNumber);
  if (!file_exists($galleryPath)) {
      mkdir($galleryPath, 0755, true);
  }

// Handle multiple images
if ($request->hasFile('images')) {
    foreach ($request->file('images') as $image) {
        // Generate a unique filename
        $filename = $image->getClientOriginalName(); // This might not be unique
        // Move the uploaded file to the gallery folder
        $image->move($galleryPath, $filename);
        // Create a new ProduitImage instance and associate it with the produit
        $produit->images()->create(['image' => 'gallery' . $galleryNumber . '/' . $filename]);
    }
}

    
        $slug = Str::slug($title, '-');
        $checkSlug = produitModel::checkSlug($slug);
        if (empty($checkSlug)) {
            $produit->slug = $slug;
            $produit->save();
        } else {
            $new_slug = $slug. '-'. $produit->id;
            $produit->slug = $new_slug;
            $produit->save();
        }
    
        return redirect('/tables/produit');
    }
    
    // Helper function to get the gallery number
    private function getGalleryNumber()
    {
        $galleryNumber = Cache::get('gallery_number', 0);
        $galleryNumber++;
        Cache::put('gallery_number', $galleryNumber);
        return $galleryNumber;
    }
    public function edit($id){
        $produit = produitModel::getSingle($id);
        $getcategory = categoriesModel::getRecord();
        $produitImages = ProduitImage::where('produitmodel_id', $id)->get(); // Fetch produit images associated with the produit
        return view("admin.fiche.fiche-produit-edit", compact('produit', 'getcategory', 'produitImages'));
    }
    public function update(Request $request, $id){ 
        $produit = produitModel::getSingle($id);
        $produit->title = $request->input('title');
        $produit->description = $request->input('description');
        $produit->category = $request->input('category');
        $produit->setTranslation('title', 'fr', $request->input('title_fr'));
        $produit->setTranslation('description', 'fr', $request->input('description_fr'));
        
        // Handle images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $key => $image) {
                $imageName = uniqid().'_'.$key.'.'.$image->getClientOriginalExtension();
                $image->move(public_path('gallery'.($key+1)), $imageName);
                $produit->images()->create(['image' => $imageName]);
            }
        }
        
        $produit->save();
        return redirect('/tables/produit');
    }
    public function destroy($id){ 
        $produit=produitModel::getSingle($id);
        $produit->delete();
        return redirect()->back();
    }
}
