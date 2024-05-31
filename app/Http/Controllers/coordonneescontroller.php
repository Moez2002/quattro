<?php

namespace App\Http\Controllers;
use App\Models\coordonneesmodel;
Use Str;
Use Auth;

use Illuminate\Http\Request;

class coordonneescontroller extends Controller
{
    public function __construct()
    {
      $this->middleware('permission:view coordonnées', ['only'=>['listcoordonnees']]);
      $this->middleware('permission:create coordonnées', ['only'=>['add','insertcoordonnees']]);
      $this->middleware('permission:update coordonnées', ['only'=>['updatecoordonnees','editcoordonnees']]);
      $this->middleware('permission:delete coordonnées', ['only'=>['destroycoordonnees']]);
    }
    public function listcoordonnees(){
        $data['getRecord'] = coordonneesModel::getRecord();
        return view("admin.new.coordonnees", $data);
    }
    public function add(){
        return view("admin.fiche.fiche-coordonnees");
    }
    public function insertcoordonnees(request $request){



        $title=trim($request->title);
        $coordonnees=new coordonneesmodel;
        $coordonnees->title=['en'=>$request->title, 'fr'=>$request->title_fr];

        $coordonnees->adresse = $request->adresse;
        $coordonnees->phone = $request->phone;
        $coordonnees->email = $request->email;
        $coordonnees->created_by = Auth::User()->id;
        $coordonnees->save();

        $slug=Str::slug($title,'-');
        $checkSlug=coordonneesmodel::checkSlug($slug);
        if(empty($checkSlug)){
            $coordonnees->slug=$slug;
            $coordonnees->save();
        }
        else{
            $new_slug=$slug. '-'.$coordonnees->id;
            $coordonnees->slug=$new_slug;
            $coordonnees->save();
        }
    

        
      
       return redirect('/new/coordonnees');
    
}
    public function editcoordonnees($id){
        $coordonnees = coordonneesmodel::getSingle($id);
        return view("admin.fiche.fiche-coordonnees-edit", compact('coordonnees'));
       

        
    }
    public function updatecoordonnees(Request $request, $id)
    { 
        $coordonnees = coordonneesmodel::getSingle($id);
        
        $coordonnees->title = $request->input('title');
        $coordonnees->setTranslation('title', 'fr', $request->input('title_fr'));

        $coordonnees->adresse = $request->input('adresse');
        $coordonnees->email = $request->input('email');
        $coordonnees->phone = $request->input('phone');


    

        
        $coordonnees->save();
    
        return redirect('/new/coordonnees');
    }
    public function destroycoordonnees($id){ 
        $coordonnees=coordonneesmodel::getSingle($id);
        $coordonnees->delete();
        return redirect()->back();
    }

}
