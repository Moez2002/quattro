<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\partenaireModel;
Use Str;
Use Auth;

class partenairecontroller extends Controller
{


        public function __construct()
        {
          $this->middleware('permission:view partenaire', ['only'=>['list']]);
          $this->middleware('permission:create partenaire', ['only'=>['add','insert']]);
          $this->middleware('permission:update partenaire', ['only'=>['update','edit']]);
          $this->middleware('permission:delete partenaire', ['only'=>['destroy']]);
      
        }
        public function list(){
            $data['getRecord'] = partenaireModel::getRecord();
            return view("admin.tables.partenaire", $data);
        }
        public function add(){
            return view("admin.fiche.fiche-partenaire");
        }
        public function insert4(request $request){

            $request->validate([
                // Add validation rules for other fields as needed
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation for image upload
            ]);
    
        
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension(); 
                $image->move(public_path('partenaire'), $imageName); 
            }
    
            $title=trim($request->title);
            $partenaire=new partenaireModel;
            $partenaire->title=['en'=>$request->title, 'fr'=>$request->title_fr];
            $partenaire->image = $imageName;
            $partenaire->created_by = Auth::User()->id;
            $partenaire->save();
    
            $slug=Str::slug($title,'-');
            $checkSlug=partenaireModel::checkSlug($slug);
            if(empty($checkSlug)){
                $partenaire->slug=$slug;
                $partenaire->save();
            }
            else{
                $new_slug=$slug. '-'.$partenaire->id;
                $partenaire->slug=$new_slug;
                $partenaire->save();
            }
    
            
          
           return redirect('/tables/partenaire');
        }
        public function edit($id){
            $partenaire = partenaireModel::getSingle($id);
            return view("admin.fiche.fiche-partenaire-edit", compact('partenaire'));
           
    
            
        }
        public function update(Request $request, $id)
        { 
            $partenaire = partenaireModel::getSingle($id);
            
            
            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
                ]);
            }
            
            
            $partenaire->title = $request->input('title');
            $partenaire->setTranslation('title', 'fr', $request->input('title_fr'));
        
            if ($request->hasFile('image')) {
                $request->validate([
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
                ]);
                
                $image = $request->file('image');
                $imageName = time() . '.' . $image->getClientOriginalExtension(); 
                $image->move(public_path('partenaire'), $imageName); 
        
                $partenaire->image = $imageName;
            }
        
            
            $partenaire->save();
        
            
            return redirect('/tables/partenaire');
        }
        public function destroy($id){ 
            $partenaire=partenaireModel::getSingle($id);
            $partenaire->delete();
            return redirect()->back();
        }
     
    
    
    
    
}
