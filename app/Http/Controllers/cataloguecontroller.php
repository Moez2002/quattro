<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catalogueModel;
Use Str;
Use Auth;

class cataloguecontroller extends Controller
{
    public function __construct()
    {
      $this->middleware('permission:view catalogue', ['only'=>['list']]);
      $this->middleware('permission:create catalogue', ['only'=>['add','insert']]);
      $this->middleware('permission:update catalogue', ['only'=>['update','edit']]);
      $this->middleware('permission:delete catalogue', ['only'=>['destroy']]);
  
    }
    public function list(){
        $data['getRecord'] = catalogueModel::getRecord();
        return view("admin.tables.catalogue", $data);
    }
    public function add(){
        return view("admin.fiche.fiche-catalogue");
    }
    public function insert5(request $request){
        $request->validate([
            'file_pdf' => 'required|mimes:pdf|max:2048', // Validation rule for PDF files
        ]);
    
        if ($request->hasFile('file_pdf')) {
            $file_pdf = $request->file('file_pdf');
            $pdfFileName = time() . '.' . $file_pdf->getClientOriginalExtension(); // Generate unique file name
            $file_pdf->move(public_path('catalogue'), $pdfFileName); // Move the uploaded file to the public/partenaire directory
        }


        $title=trim($request->title);
        $catalogue=new catalogueModel;
        $catalogue->title=['en'=>$request->title, 'fr'=>$request->title_fr];
        $catalogue->année= trim($request->année);
        $catalogue->file_pdf= trim($request->file_pdf);
        $catalogue->file_pdf = $pdfFileName;
        $catalogue->created_by = Auth::User()->id;
        $catalogue->save();

        $slug=Str::slug($title,'-');
        $checkSlug=catalogueModel::checkSlug($slug);
        if(empty($checkSlug)){
            $catalogue->slug=$slug;
            $catalogue->save();
        }
        else{
            $new_slug=$slug. '-'.$catalogue->id;
            $catalogue->slug=$new_slug;
            $catalogue->save();
        }

        
      
       return redirect('/tables/catalogue');
    }
    public function edit($id){
        $catalogue= catalogueModel::getSingle($id);
        return view("admin.fiche.fiche-catalogue-edit", compact('catalogue'));
       

        
    }
    public function update( request $request, $id){ 
       
       
        $catalogue=catalogueModel::getSingle($id);
        
        $catalogue->title = $request->input('title');
        
        $catalogue->setTranslation('title', 'fr', $request->input('title_fr'));
        
        $catalogue->année = $request->input('année');
        $catalogue->file_pdf = $request->input('file_pdf');
        
        $catalogue->update();

     
        return redirect('/tables/catalogue');

    }
    public function destroy($id){ 
        $catalogue=catalogueModel::getSingle($id);
        $catalogue->delete();
        return redirect()->back();
    }
}
