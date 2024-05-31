<?php

namespace App\Http\Controllers;
use App\Models\home1model;
use App\Models\home1block2model;
use App\Models\home1block3model;
use App\Models\home1block4model;
use App\Models\home1block5model;

Use Str;
Use Auth;

use Illuminate\Http\Request;

class home1controller extends Controller
{
    public function __construct()
    {
      $this->middleware('permission:view aboutusblocks', ['only'=>['listHome']]);
      $this->middleware('permission:create aboutusblocks', ['only'=>['add','inserthomeblock1','add1','inserthomeblock2','updatehomeblock3','edithomeblock3','add3','inserthomeblock4','add4','inserthomeblock5']]);
      $this->middleware('permission:update aboutusblocks', ['only'=>['updatehomeblock1','edithomeblock1','updatehomeblock2','edithomeblock2','updatehomeblock3','edithomeblock3','updatehomeblock4','edithomeblock4','updatehomeblock5','edithomeblock5']]);
      $this->middleware('permission:delete aboutusblocks', ['only'=>['destroyhomeblock1','destroyhomeblock2','destroyhomeblock3','destroyhomeblock4','destroyhomeblock5']]);
  
    }
    public function listHome()
    {
        $data['getRecordHome1'] = home1model::getRecord();
        $data['getRecordHome2'] = home1block2model::getRecord();
        $data['getRecordHome3'] = home1block3model::getRecord();
        $data['getRecordHome4'] = home1block4model::getRecord();
        $data['getRecordHome5'] = home1block5model::getRecord();
        return view("admin.new.aboutus1", $data);
    }
    
    public function add(){
        return view("admin.fiche.aboutusfiche.fiche-homeblock1");
    }
    public function inserthomeblock1(request $request){
        $request->validate([
            
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('homeblock1'), $imageName); 
        }



        $title=trim($request->title);
        $homeblock1=new home1model;
        $homeblock1->title=['en'=>$request->title, 'fr'=>$request->title_fr];
        $homeblock1->_title=['en'=>$request->_title, 'fr'=>$request->_title_fr];
        $homeblock1->image = $imageName;
        $homeblock1->created_by = Auth::User()->id;
        $homeblock1->save();

        $slug=Str::slug($title,'-');
        $checkSlug=home1model::checkSlug($slug);
        if(empty($checkSlug)){
            $homeblock1->slug=$slug;
            $homeblock1->save();
        }
        else{
            $new_slug=$slug. '-'.$homeblock1->id;
            $homeblock1->slug=$new_slug;
            $homeblock1->save();
        }
    

        
      
       return redirect('/new/aboutus1');
    
}
    public function edithomeblock1($id){
        $homeblock1 = home1model::getSingle($id);
        return view("admin.fiche.aboutusfiche.fiche-homeblock1-edit", compact('homeblock1'));
       

        
    }
    public function updatehomeblock1(Request $request, $id)
    { 
        $homeblock1 = home1model::getSingle($id);
        
        $homeblock1->title = $request->input('title');
        $homeblock1->_title = $request->input('_title');
        $homeblock1->setTranslation('title', 'fr', $request->input('title_fr'));
        $homeblock1->setTranslation('_title', 'fr', $request->input('_title_fr'));
    
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('homeblock1'), $imageName); 
    
            $homeblock1->image = $imageName;
        }
        
        $homeblock1->save();
    
        return redirect('/new/aboutus1');
    }
    public function destroyhomeblock1($id){ 
        $homeblock1=home1model::getSingle($id);
        $homeblock1->delete();
        return redirect()->back();
    }








    public function add1(){
        return view("admin.fiche.aboutusfiche.fiche-homeblock2");
    }
    public function inserthomeblock2(request $request){
        $request->validate([
            
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('homeblock2'), $imageName); 
        }



        $title=trim($request->title);
        $homeblock2=new home1block2model;
        $homeblock2->title=['en'=>$request->title, 'fr'=>$request->title_fr];
        $homeblock2->description=['en'=>$request->description, 'fr'=>$request->description_fr];
        $homeblock2->image = $imageName;
        $homeblock2->created_by = Auth::User()->id;
        $homeblock2->save();

        $slug=Str::slug($title,'-');
        $checkSlug=home1block2model::checkSlug($slug);
        if(empty($checkSlug)){
            $homeblock2->slug=$slug;
            $homeblock2->save();
        }
        else{
            $new_slug=$slug. '-'.$homeblock2->id;
            $homeblock2->slug=$new_slug;
            $homeblock2->save();
        }
    

        
      
       return redirect('/new/aboutus1');
    
}
    public function edithomeblock2($id){
        $homeblock2 = home1block2model::getSingle($id);
        return view("admin.fiche.aboutusfiche.fiche-homeblock2-edit", compact('homeblock2'));
       

        
    }
    public function updatehomeblock2(Request $request, $id)
    { 
        $homeblock2 = home1block2model::getSingle($id);
        
        $homeblock2->title = $request->input('title');
        $homeblock2->description = $request->input('description');
        $homeblock2->setTranslation('title', 'fr', $request->input('title_fr'));
        $homeblock2->setTranslation('description', 'fr', $request->input('description_fr'));
    
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('homeblock2'), $imageName); 
    
            $homeblock2->image = $imageName;
        }
        
        $homeblock2->save();
    
        return redirect('/new/aboutus1');
    }
    public function destroyhomeblock2($id){ 
        $homeblock2=home1block2model::getSingle($id);
        $homeblock2->delete();
        return redirect()->back();
    }







    public function add2(){
        return view("admin.fiche.aboutusfiche.fiche-homeblock3");
    }
    public function inserthomeblock3(request $request){
        $request->validate([
            
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link'=> 'nullable|url' 
        ]);

    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('homeblock3'), $imageName); 
        }



        $title=trim($request->title);
        $homeblock3=new home1block3model;
        $homeblock3->title=['en'=>$request->title, 'fr'=>$request->title_fr];
        $homeblock3->image = $imageName;
        $homeblock3->link = $request->link;
        $homeblock3->created_by = Auth::User()->id;
        $homeblock3->save();

        $slug=Str::slug($title,'-');
        $checkSlug=home1block3model::checkSlug($slug);
        if(empty($checkSlug)){
            $homeblock3->slug=$slug;
            $homeblock3->save();
        }
        else{
            $new_slug=$slug. '-'.$homeblock3->id;
            $homeblock3->slug=$new_slug;
            $homeblock3->save();
        }
    

        
      
       return redirect('/new/aboutus1');
    
}
    public function edithomeblock3($id){
        $homeblock3 = home1block3model::getSingle($id);
        return view("admin.fiche.aboutusfiche.fiche-homeblock3-edit", compact('homeblock3'));
       

        
    }
    public function updatehomeblock3(Request $request, $id)
    { 
        $homeblock3 = home1block3model::getSingle($id);
        
        $homeblock3->title = $request->input('title');
        $homeblock3->link = $request->input('link');
        
        $homeblock3->setTranslation('title', 'fr', $request->input('title_fr'));

        
    
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('homeblock3'), $imageName); 
    
            $homeblock3->image = $imageName;
        }
        
        $homeblock3->save();
    
        return redirect('/new/aboutus1');
    }
    public function destroyhomeblock3($id){ 
        $homeblock3=home1block3model::getSingle($id);
        $homeblock3->delete();
        return redirect()->back();
    }



    public function add3(){
        return view("admin.fiche.aboutusfiche.fiche-homeblock4");
    }
    public function inserthomeblock4(request $request){
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
        $imageName = null;

    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('homeblock4'), $imageName); 
        }



        $title=trim($request->title);
        $homeblock4=new home1block4model;
        $homeblock4->title=['en'=>$request->title, 'fr'=>$request->title_fr];
        $homeblock4->description=['en'=>$request->description, 'fr'=>$request->description_fr];
        $homeblock4->image = $imageName;
        $homeblock4->created_by = Auth::User()->id;
        $homeblock4->save();

        $slug=Str::slug($title,'-');
        $checkSlug=home1block4model::checkSlug($slug);
        if(empty($checkSlug)){
            $homeblock4->slug=$slug;
            $homeblock4->save();
        }
        else{
            $new_slug=$slug. '-'.$homeblock4->id;
            $homeblock4->slug=$new_slug;
            $homeblock4->save();
        }
    

        
      
       return redirect('/new/aboutus1');
    
}
    public function edithomeblock4($id){
        $homeblock4 = home1block4model::getSingle($id);
        return view("admin.fiche.aboutusfiche.fiche-homeblock4-edit", compact('homeblock4'));
       

        
    }
    public function updatehomeblock4(Request $request, $id)
    { 
        $homeblock4 = home1block4model::getSingle($id);
        
        $homeblock4->title = $request->input('title');
        $homeblock4->description = $request->input('description');
        $homeblock4->setTranslation('title', 'fr', $request->input('title_fr'));
        $homeblock4->setTranslation('description', 'fr', $request->input('description_fr'));
    
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('homeblock4'), $imageName); 
    
            $homeblock4->image = $imageName;
        }
        
        $homeblock4->save();
    
        return redirect('/new/aboutus1');
    }
    public function destroyhomeblock4($id){ 
        $homeblock4=home1block4model::getSingle($id);
        $homeblock4->delete();
        return redirect()->back();
    }



    public function add4(){
        return view("admin.fiche.aboutusfiche.fiche-homeblock5");
    }
    public function inserthomeblock5(request $request){

        $title=trim($request->title);
        $homeblock5=new home1block5model;
        $homeblock5->title=['en'=>$request->title, 'fr'=>$request->title_fr];
        $homeblock5->description=['en'=>$request->description, 'fr'=>$request->description_fr];
        $homeblock5->commentaire=['en'=>$request->commentaire, 'fr'=>$request->commentaire_fr];
        
        $homeblock5->created_by = Auth::User()->id;
        $homeblock5->save();

        $slug=Str::slug($title,'-');
        $checkSlug=home1block4model::checkSlug($slug);
        if(empty($checkSlug)){
            $homeblock5->slug=$slug;
            $homeblock5->save();
        }
        else{
            $new_slug=$slug. '-'.$homeblock5->id;
            $homeblock5->slug=$new_slug;
            $homeblock5->save();
        }
    

        
      
       return redirect('/new/aboutus1');
    
}
    public function edithomeblock5($id){
        $homeblock5 = home1block5model::getSingle($id);
        return view("admin.fiche.aboutusfiche.fiche-homeblock5-edit", compact('homeblock5'));
       

        
    }
    public function updatehomeblock5(Request $request, $id)
    { 
        $homeblock5 = home1block5model::getSingle($id);
        
        $homeblock5->title = $request->input('title');
        $homeblock5->description = $request->input('description');
        $homeblock5->commentaire = $request->input('commentaire');
        $homeblock5->setTranslation('title', 'fr', $request->input('title_fr'));
        $homeblock5->setTranslation('description', 'fr', $request->input('description_fr'));
        $homeblock5->setTranslation('commentaire', 'fr', $request->input('commentaire_fr'));
    
   
        
        $homeblock5->save();
    
        return redirect('/new/aboutus1');
    }
    public function destroyhomeblock5($id){ 
        $homeblock5=home1block5model::getSingle($id);
        $homeblock5->delete();
        return redirect()->back();
    }
    public function insertemail(request $request){
        $homeblock5=new home1block5model;
        $homeblock5->email = $request->email;
        $homeblock5->created_by = Auth::User()->id;
        $homeblock5->save();
        return redirect('/aboutus');

    }





    
}
