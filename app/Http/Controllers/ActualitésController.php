<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ActualitésModel;
use App\Models\actualitésimagemodel;
Use Str;
Use Auth;

class ActualitésController extends Controller
{
    public function __construct()
    {
      $this->middleware('permission:view actualités', ['only'=>['list']]);
      $this->middleware('permission:create actualités', ['only'=>['add','insert']]);
      $this->middleware('permission:update actualités', ['only'=>['update','edit']]);
      $this->middleware('permission:delete actualités', ['only'=>['destroy']]);
  
    }
    public function list(){
        $data['getRecord'] = ActualitésModel::getRecord();
        return view("admin.tables.actualités", $data);
    }
    public function add(){
        return view("admin.fiche.fiche-actualités");
    }
    public function insert(request $request){
        $request->validate([
            // Add validation rules for other fields as needed
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation for image upload
        ]);

    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); // Generate unique file name
            $image->move(public_path('actualités'), $imageName); // Move the uploaded file to the public/actualités directory
        }



        $title=trim($request->title);
        $actualités=new ActualitésModel;
        $actualités->title=['en'=>$request->title, 'fr'=>$request->title_fr];
        $actualités->description=['en'=>$request->description, 'fr'=>$request->description_fr];
        $actualités->image = $imageName;
        $actualités->created_by = Auth::User()->id;
        $actualités->save();

        $slug=Str::slug($title,'-');
        $checkSlug=ActualitésModel::checkSlug($slug);
        if(empty($checkSlug)){
            $actualités->slug=$slug;
            $actualités->save();
        }
        else{
            $new_slug=$slug. '-'.$actualités->id;
            $actualités->slug=$new_slug;
            $actualités->save();
        }
    

        
      
       return redirect('/tables/actualités');
    
}
    public function edit($id){
        $actualités = ActualitésModel::getSingle($id);
        return view("admin.fiche.fiche-actualités-edit", compact('actualités'));
       

        
    }
    public function update( request $request, $id){ 
       
       
        $actualités=ActualitésModel::getSingle($id);
        
        $actualités->title = $request->input('title');
        $actualités->description = $request->input('description');
        $actualités->setTranslation('title', 'fr', $request->input('title_fr'));
        $actualités->setTranslation('description', 'fr', $request->input('description_fr'));
        $actualités->image = $request->input('image');
        
        $actualités->update();

     
        return redirect('/tables/actualités');

    }
    public function destroy($id){ 
        $actualités=ActualitésModel::getSingle($id);
        $actualités->delete();
        return redirect()->back();
    }
 


}
