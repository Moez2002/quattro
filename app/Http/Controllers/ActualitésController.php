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
            
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('actualités'), $imageName); 
        }



        $name=trim($request->name);
        $actualités=new ActualitésModel;
        $actualités->name=['en'=>$request->name, 'fr'=>$request->name_fr];
        $actualités->title=['en'=>$request->title, 'fr'=>$request->title_fr];
        $actualités->description=['en'=>$request->description, 'fr'=>$request->description_fr];
        $actualités->longdescription=['en'=>$request->longdescription, 'fr'=>$request->longdescription_fr];
        $actualités->image = $imageName;
        $actualités->created_by = Auth::User()->id;
        $actualités->save();

        $slug=Str::slug($name,'-');
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
    public function update(Request $request, $id)
    { 
        $actualités = ActualitésModel::getSingle($id);
        $actualités->name = $request->input('name');
        
        $actualités->title = $request->input('title');
        $actualités->description = $request->input('description');
        $actualités->longdescription = $request->input('longdescription');
        $actualités->setTranslation('title', 'fr', $request->input('title_fr'));
        $actualités->setTranslation('description', 'fr', $request->input('description_fr'));
    
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('actualités'), $imageName); 
    
            $actualités->image = $imageName;
        }
        
        $actualités->save();
    
        return redirect('/tables/actualités');
    }
    public function destroy($id){ 
        $actualités=ActualitésModel::getSingle($id);
        $actualités->delete();
        return redirect()->back();
    }
 


}
