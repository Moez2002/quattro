<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
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
        $imageName1 = null;
        $imageName2 = null;
        $imageName3 = null;

        $request->validate([
            
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        
        
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1');
            $imageName1 = time() . '_' . uniqid() . '.' . $image1->getClientOriginalExtension(); 
            $image1->move(public_path('produitblock3'), $imageName1);
        }
        
        if ($request->hasFile('image2')) {
            $image2 = $request->file('image2');
            $imageName2 = time() . '_' . uniqid() . '.' . $image2->getClientOriginalExtension(); 
            $image2->move(public_path('produitblock3'), $imageName2);
        }
        
        if ($request->hasFile('image3')) {
            $image3 = $request->file('image3');
            $imageName3 = time() . '_' . uniqid() . '.' . $image3->getClientOriginalExtension(); 
            $image3->move(public_path('produitblock3'), $imageName3);
        }




        
        $subcategory = trim($request->subcategory);
        $produit = new produitModel;
        $produit->title = ['en' => $request->title, 'fr' => $request->title_fr];
        $produit->subcategory = $request->subcategory;
        $produit->category = $request->category;
        $produit->image1 = $imageName1;
        $produit->image2 = $imageName2;
        $produit->image3 = $imageName3;
        $produit->instagram = $request->instagram;
        $produit->facebook = $request->facebook;
        $produit->tiktok = $request->tiktok;
        $produit->description = ['en' => $request->description, 'fr' => $request->description_fr];
        $produit->mini_description = ['en' => $request->mini_description, 'fr' => $request->mini_description_fr];
        $produit->created_by = Auth::user()->id;
        $produit->save();
    
  
  $galleryNumber = $this->getGalleryNumber();
  $galleryPath = public_path('gallery' . $galleryNumber);
  if (!file_exists($galleryPath)) {
      mkdir($galleryPath, 0755, true);
  }


if ($request->hasFile('images')) {
    foreach ($request->file('images') as $image) {
        
        $filename = $image->getClientOriginalName(); 
        
        $image->move($galleryPath, $filename);
       
        $produit->images()->create(['image' => 'gallery' . $galleryNumber . '/' . $filename]);
    }
}

    
        $slug = Str::slug($subcategory, '-');
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
    
    
    public function edit($id){
        $produit = produitModel::getSingle($id);
        $categories['getcategory'] =categoriesModel::getRecord();
        $produitImages = ProduitImage::where('produitmodel_id', $id)->get(); 
        $selectedCategoryId = $produit->category_id;
        $selectedsubCategoryId = $produit->category_id;

        return view("admin.fiche.fiche-produit-edit", compact('produit', 'categories', 'produitImages','selectedCategoryId','selectedsubCategoryId' ));
    }
    public function update(Request $request, $id)
    { 
        $imageName1 = null;
        $imageName2 = null;
        $imageName3 = null;

        $produit = produitModel::getSingle($id);
        $produit->title = $request->input('title');
        $produit->category = $request->input('category');
        $produit->subcategory = $request->input('subcategory');
        $produit->facebook = $request->input('facebook');
        $produit->instagram = $request->input('instagram');
        $produit->tiktok = $request->input('tiktok');
        $produit->description = $request->input('description');
        $produit->mini_description = $request->input('mini_description');
        $produit->setTranslation('title', 'fr', $request->input('title_fr'));
        $produit->setTranslation('description', 'fr', $request->input('description_fr'));
        $produit->setTranslation('mini_description', 'fr', $request->input('mini_description_fr'));
    


        if ($request->hasFile('image1')) {
            $request->validate([
                'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
            
            $image1 = $request->file('image1');
            $imageName1 = time() . '.' . $image1->getClientOriginalExtension(); 
            $image1->move(public_path('produitblock3'), $imageName1); 
            $produit->image1 = $imageName1;

        }
        
        if ($request->hasFile('image2')) {
            $request->validate([
                'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
            
            $image2 = $request->file('image2');
            $imageName2 = time() . '.' . $image2->getClientOriginalExtension(); 
            $image2->move(public_path('produitblock3'), $imageName2); 
            $produit->image2 = $imageName2;

        }
        if ($request->hasFile('image3')) {
            $request->validate([
                'image3' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
            
            $image3 = $request->file('image3');
            $imageName3 = time() . '.' . $image3->getClientOriginalExtension(); 
            $image3->move(public_path('produitblock3'), $imageName3); 
            $produit->image3 = $imageName3;

        }




        if ($request->hasFile('images')) {
            $galleryNumber = $this->getGalleryNumber();
            $galleryPath = public_path('gallery' . $galleryNumber);
            if (!file_exists($galleryPath)) {
                mkdir($galleryPath, 0755, true);
            }
            
            foreach ($request->file('images') as $key => $image) {
                // Check if the image is being edited
                if ($request->has("image_ids.$key")) {
                    // Get the image ID
                    $imageId = $request->input("image_ids.$key");
                    // Find the corresponding image record
                    $produitImage = ProduitImage::find($imageId);
                    if ($produitImage) {
                        // Delete the old image file from storage
                        Storage::delete($produitImage->image);
                        // Generate a unique filename
                        $filename = uniqid() . '_' . $key . '.' . $image->getClientOriginalExtension();
                        // Move the new image to the gallery directory
                        $image->move($galleryPath, $filename);
                        // Update the image record with the new path
                        $produitImage->update(['image' => 'gallery' . $galleryNumber . '/' . $filename]);
                    }
                } else {
                    // Generate a unique filename
                    $filename = uniqid() . '_' . $key . '.' . $image->getClientOriginalExtension();
                    // Move the image to the gallery directory
                    $image->move($galleryPath, $filename);
                    // Create a new image record with the correct path
                    $produit->images()->create(['image' => 'gallery' . $galleryNumber . '/' . $filename]);
                }
            }
        }

        $produit->save();
        return redirect('/tables/produit');
    }
    private function getGalleryNumber()
    {
        $galleryNumber = Cache::get('gallery_number', 0);
        $galleryNumber++;
        Cache::put('gallery_number', $galleryNumber);
        return $galleryNumber;
    }


    public function destroy($id){ 
        $produit=produitModel::getSingle($id);
        $produit->delete();
        return redirect()->back();
    }



}
