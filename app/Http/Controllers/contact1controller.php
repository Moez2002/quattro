<?php

namespace App\Http\Controllers;
use App\Models\contact1block1model;
use App\Models\contact1block2model;
Use Str;
Use Auth;

use Illuminate\Http\Request;

class contact1controller extends Controller
{
    public function __construct()
    {
      $this->middleware('permission:view contactblocks', ['only'=>['listcontact']]);
      $this->middleware('permission:create contactblocks', ['only'=>['add','insertcontactblock1','add1','insertcontactblock2']]);
      $this->middleware('permission:update contactblocks', ['only'=>['updatecontactblock1','editcontactblock1','updatecontactblock2','editcontactblock2']]);
      $this->middleware('permission:delete contactblocks', ['only'=>['destroycontactblock1','destroycontactblock2']]);
    }
    public function listcontact()
    {
        $data['getRecordcontact1'] = contact1block1model::getRecord();
        $data['getRecordcontact2'] = contact1block2model::getRecord();

        return view("admin.new.contact1", $data);
    }
    
    public function add(){
        return view("admin.fiche.contactfiche.fiche-contactblock1");
    }
    public function insertcontactblock1(request $request){
        $request->validate([
            
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('contact/contactblock1'), $imageName); 
        }



        $title=trim($request->title);
        $contactblock1=new contact1block1model;
        $contactblock1->title=['en'=>$request->title, 'fr'=>$request->title_fr];
        $contactblock1->_title=['en'=>$request->_title, 'fr'=>$request->_title_fr];
        $contactblock1->image = $imageName;
        $contactblock1->created_by = Auth::User()->id;
        $contactblock1->save();

        $slug=Str::slug($title,'-');
        $checkSlug=contact1block1model::checkSlug($slug);
        if(empty($checkSlug)){
            $contactblock1->slug=$slug;
            $contactblock1->save();
        }
        else{
            $new_slug=$slug. '-'.$contactblock1->id;
            $contactblock1->slug=$new_slug;
            $contactblock1->save();
        }
    

        
      
       return redirect('/new/contact1');
    
}
    public function editcontactblock1($id){
        $contactblock1 = contact1block1model::getSingle($id);
        return view("admin.fiche.contactfiche.fiche-contactblock1-edit", compact('contactblock1'));
       

        
    }
    public function updatecontactblock1(Request $request, $id)
    { 
        $contactblock1 = contact1block1model::getSingle($id);
        
        $contactblock1->title = $request->input('title');
        $contactblock1->_title = $request->input('_title');
        $contactblock1->setTranslation('title', 'fr', $request->input('title_fr'));
        $contactblock1->setTranslation('_title', 'fr', $request->input('_title_fr'));
    
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('contact/contactblock1'), $imageName); 
    
            $contactblock1->image = $imageName;
        }
        
        $contactblock1->save();
    
        return redirect('/new/contact1');
    }
    public function destroyhomeblock1($id){ 
        $contactblock1=contact1block1model::getSingle($id);
        $contactblock1->delete();
        return redirect()->back();
    }








    public function add1(){
        return view("admin.fiche.contactfiche.fiche-contactblock2");
    }
    public function insertcontactblock2(request $request){
        $request->validate([
            
            'facebook'=> 'nullable|url', 
            'linkedin'=> 'nullable|url',
            'tiktok'=> 'nullable|url',
            'instagram'=> 'nullable|url',
            'maps'=> 'nullable|url'
        ]);

 
        $contactblock2=new contact1block2model;
        $contactblock2->facebook = $request->facebook;
        $contactblock2->tiktok = $request->tiktok;
        $contactblock2->instagram = $request->instagram;
        $contactblock2->linkedin = $request->linkedin;
        $contactblock2->maps = $request->map;
        $contactblock2->created_by = Auth::User()->id;
        $contactblock2->save();

    

        
      
       return redirect('/new/contact1');
    
}
    public function editcontactblock2($id){
        $contactblock2 = contact1block2model::getSingle($id);
        return view("admin.fiche.contactfiche.fiche-contactblock2-edit", compact('contactblock2'));
       

        
    }
    public function updatecontactblock2(Request $request, $id)
    { 
        $contactblock2 = contact1block2model::getSingle($id);
        $contactblock2->facebook = $request->input('facebook');
        $contactblock2->instagram = $request->input('instagram');
        $contactblock2->tiktok = $request->input('tiktok');
        $contactblock2->linkedin = $request->input('linkedin');
        $contactblock2->maps = $request->input('maps');
        
        $contactblock2->save();
    
        return redirect('/new/contact1');
    }
    public function destroyhomeblock2($id){ 
        $contactblock2=contact1block2model::getSingle($id);
        $contactblock2->delete();
        return redirect()->back();
    }
}
