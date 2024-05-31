<?php

namespace App\Http\Controllers;
use App\Models\home11block1model;
use App\Models\home11block2model;
use App\Models\home11block3model;
use App\Models\home11block4model;
use App\Models\home11block5model;
use App\Models\home11block6model;
use App\Models\home11block7model;

Use Str;
Use Auth;
use Illuminate\Http\Request;

class home11controller extends Controller
{
    public function __construct()
    {
      $this->middleware('permission:view homeblocks', ['only'=>['listHome1']]);
      $this->middleware('permission:create homeblocks', ['only'=>['add11','inserthome1block1','add12','inserthome1block2','add13','inserthome1block3','add14','inserthome1block4','add15','inserthome1block5','add16','inserthome1block6','add17','inserthome1block7']]);
      $this->middleware('permission:update homeblocks', ['only'=>['updatehome1block1','edithome1block1','updatehome1block2','edithome1block2','updatehome1block3','edithome1block3','updatehome1block4','edithome1block4','updatehome1block5','edithome1block5','updatehome1block6','edithome1block6','updatehome1block7','edithome1block7']]);
      $this->middleware('permission:delete homeblocks', ['only'=>['destroyhome1block1','destroyhome1block2','destroyhome1block3','destroyhome1block4','destroyhome1block5','destroyhome1block6','destroyhome1block6']]);

    }
    public function listHome1()
    {
        $data['getRecordHome11'] = home11block1model::getRecord();
        $data['getRecordHome12'] = home11block2model::getRecord();
        $data['getRecordHome13'] = home11block3model::getRecord();
        $data['getRecordHome14'] = home11block4model::getRecord();
        $data['getRecordHome15'] = home11block5model::getRecord();
        $data['getRecordHome16'] = home11block6model::getRecord();
        $data['getRecordHome17'] = home11block7model::getRecord();
        return view("admin.new.home1", $data);
    }
    public function add11(){
        return view("admin.fiche.homefiche.fiche-home1block1");
    }
    public function inserthome1block1(request $request){
        $imageName = null;
        $videoName = null;
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|file|mimetypes:video/mp4,video/mpeg,video/quicktime|max:20480', 
            'link'=> 'nullable|url'
        ]);

    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('home/home1block1'), $imageName);

        }
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoName = time() . '.' . $video->getClientOriginalExtension(); 
            $video->move(public_path('home/home1block1'), $videoName);

        }




        $title=trim($request->title);
        $home1block1=new home11block1model;
        $home1block1->title=['en'=>$request->title, 'fr'=>$request->title_fr];
        $home1block1->description=['en'=>$request->description, 'fr'=>$request->description_fr];
        $home1block1->namelink=['en'=>$request->namelink, 'fr'=>$request->namelink_fr];
        $home1block1->image = $imageName;
        $home1block1->link = $request->link;
        $home1block1->video = $request->video;
        $home1block1->created_by = Auth::User()->id;
        $home1block1->save();

        $slug=Str::slug($title,'-');
        $checkSlug=home11block1model::checkSlug($slug);
        if(empty($checkSlug)){
            $home1block1->slug=$slug;
            $home1block1->save();
        }
        else{
            $new_slug=$slug. '-'.$home1block1->id;
            $home1block1->slug=$new_slug;
            $home1block1->save();
        }
    

        
      
       return redirect('/new/home1');
    
}
    public function edithome1block1($id){
        $home1block1 = home11block1model::getSingle($id);
        return view("admin.fiche.homefiche.fiche-home1block1-edit", compact('home1block1'));
       

        
    }
    public function updatehome1block1(Request $request, $id)
    { 
        $home1block1 = home11block1model::getSingle($id);
        
        $home1block1->title = $request->input('title');
        $home1block1->description = $request->input('description');
        $home1block1->setTranslation('title', 'fr', $request->input('title_fr'));
        $home1block1->setTranslation('description', 'fr', $request->input('description_fr'));
        $home1block1->video = $request->input('video');
        $home1block1->link = $request->input('link');
        $home1block1->setTranslation('namelink', 'fr', $request->input('namelink_fr'));

    
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('home/home1block1'), $imageName); 
            $home1block1->image = $imageName;

        }
        if ($request->hasFile('video')) {
            $request->validate([
                'video' => 'nullable|file|mimetypes:video/mp4,video/mpeg,video/quicktime|max:20480', 
            ]);
            
            $video = $request->file('video');
            $videoName = time() . '.' . $video->getClientOriginalExtension(); 
            $video->move(public_path('home/home1block1'), $videoName); 
            $home1block1->video = $videoName;

        }

        
        $home1block1->save();
    
        return redirect('/new/home1');
    }
    public function destroyhome1block1($id){ 
        $home1block1=home11block1model::getSingle($id);
        $home1block1->delete();
        return redirect()->back();
    }






    public function add12(){
        return view("admin.fiche.homefiche.fiche-home1block2");
    }
    public function inserthome1block2(request $request){
        $imageName = null;
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'link'=> 'nullable|url'
        ]);

    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('home/home1block2'), $imageName);

        }





        $title=trim($request->title);
        $home1block2=new home11block2model;
        $home1block2->title=['en'=>$request->title, 'fr'=>$request->title_fr];
        $home1block2->description=['en'=>$request->description, 'fr'=>$request->description_fr];
        $home1block2->image = $imageName;
        $home1block2->link = $request->link;
        $home1block2->created_by = Auth::User()->id;
        $home1block2->save();

        $slug=Str::slug($title,'-');
        $checkSlug=home11block2model::checkSlug($slug);
        if(empty($checkSlug)){
            $home1block2->slug=$slug;
            $home1block2->save();
        }
        else{
            $new_slug=$slug. '-'.$home1block2->id;
            $home1block2->slug=$new_slug;
            $home1block2->save();
        }
    

        
      
       return redirect('/new/home1');
    
}
    public function edithome1block2($id){
        $home1block2 = home11block2model::getSingle($id);
        return view("admin.fiche.homefiche.fiche-home1block2-edit", compact('home1block2'));
       

        
    }
    public function updatehome1block2(Request $request, $id)
    { 
        $home1block2 = home11block2model::getSingle($id);
        
        $home1block2->title = $request->input('title');
        $home1block2->description = $request->input('description');
        $home1block2->setTranslation('title', 'fr', $request->input('title_fr'));
        $home1block2->setTranslation('description', 'fr', $request->input('description_fr'));
        $home1block2->link = $request->input('link');

    
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('home/home1block2'), $imageName); 
            $home1block2->image = $imageName;

        }

    

        
        $home1block2->save();
    
        return redirect('/new/home1');
    }
    public function destroyhome1block2($id){ 
        $home1block2=home11block2model::getSingle($id);
        $home1block2->delete();
        return redirect()->back();
    }






    public function add13(){
        return view("admin.fiche.homefiche.fiche-home1block3");
    }
    public function inserthome1block3(request $request){
        $imageName = null;
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'link'=> 'nullable|url'
        ]);

    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('home/home1block3'), $imageName);

        }





        $title=trim($request->title);
        $home1block3=new home11block3model;
        $home1block3->title=['en'=>$request->title, 'fr'=>$request->title_fr];
        $home1block3->image = $imageName;
        $home1block3->link = $request->link;
        $home1block3->created_by = Auth::User()->id;
        $home1block3->save();

        $slug=Str::slug($title,'-');
        $checkSlug=home11block3model::checkSlug($slug);
        if(empty($checkSlug)){
            $home1block3->slug=$slug;
            $home1block3->save();
        }
        else{
            $new_slug=$slug. '-'.$home1block3->id;
            $home1block3->slug=$new_slug;
            $home1block3->save();
        }
    

        
      
       return redirect('/new/home1');
    
}
    public function edithome1block3($id){
        $home1block3 = home11block3model::getSingle($id);
        return view("admin.fiche.homefiche.fiche-home1block3-edit", compact('home1block3'));
       

        
    }
    public function updatehome1block3(Request $request, $id)
    { 
        $home1block3 = home11block3model::getSingle($id);
        
        $home1block3->title = $request->input('title');
        $home1block3->setTranslation('title', 'fr', $request->input('title_fr'));
        $home1block3->link = $request->input('link');

    
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('home/home1block3'), $imageName); 
            $home1block3->image = $imageName;

        }

    

        
        $home1block3->save();
    
        return redirect('/new/home1');
    }
    public function destroyhome1block3($id){ 
        $home1block3=home11block3model::getSingle($id);
        $home1block3->delete();
        return redirect()->back();
    }







    public function add14(){
        return view("admin.fiche.homefiche.fiche-home1block4");
    }
    public function inserthome1block4(request $request){
        $imageName = null;
        $backimageName = null;
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'backimage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  
            'link'=> 'nullable|url',
            'linkmorevids'=> 'nullable|url'
        ]);

    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('home/home1block4'), $imageName);

        }
        if ($request->hasFile('backimage')) {
            $backimage = $request->file('backimage');
            $backimageName = time() . '.' . $image->getClientOriginalExtension(); 
            $backimage->move(public_path('home/home1block4'), $backimageName);

        }





        $title=trim($request->title);
        $home1block4=new home11block4model;
        $home1block4->title=['en'=>$request->title, 'fr'=>$request->title_fr];
        $home1block4->description=['en'=>$request->description, 'fr'=>$request->description_fr];
        $home1block4->image = $imageName;
        $home1block4->backimage = $backimageName;
        $home1block4->link = $request->link;
        $home1block4->linkmorevids = $request->linkmorevids;
        $home1block4->created_by = Auth::User()->id;
        $home1block4->save();

        $slug=Str::slug($title,'-');
        $checkSlug=home11block4model::checkSlug($slug);
        if(empty($checkSlug)){
            $home1block4->slug=$slug;
            $home1block4->save();
        }
        else{
            $new_slug=$slug. '-'.$home1block4->id;
            $home1block4->slug=$new_slug;
            $home1block4->save();
        }
    

        
      
       return redirect('/new/home1');
    
}
    public function edithome1block4($id){
        $home1block4 = home11block4model::getSingle($id);
        return view("admin.fiche.homefiche.fiche-home1block4-edit", compact('home1block4'));
       

        
    }
    public function updatehome1block4(Request $request, $id)
    { 
        $home1block4 = home11block4model::getSingle($id);
        
        $home1block4->title = $request->input('title');
        $home1block4->setTranslation('title', 'fr', $request->input('title_fr'));
        $home1block4->description = $request->input('description');
        $home1block4->link = $request->input('link');
        $home1block4->linkmorevids = $request->input('linkmorevids');

    
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('home/home1block4'), $imageName); 
            $home1block4->image = $imageName;

        }
        if ($request->hasFile('backimage')) {
            $request->validate([
                'backimage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
            
            $backimage = $request->file('backimage');
            $backimageName = time() . '.' . $image->getClientOriginalExtension(); 
            $backimage->move(public_path('home/home1block4'), $backimageName); 
            $home1block4->backimage = $backimageName;

        }

    

        
        $home1block4->save();
    
        return redirect('/new/home1');
    }
    public function destroyhome1block4($id){ 
        $home1block4=home11block4model::getSingle($id);
        $home1block4->delete();
        return redirect()->back();
    }








    public function add15(){
        return view("admin.fiche.homefiche.fiche-home1block5");
    }
    public function inserthome1block5(request $request){
        $imageName = null;
        $proffimageName = null;
        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'proffimage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',  
            'link'=> 'nullable|url',
            'search'=> 'nullable|url'
        ]);

    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('home/home1block5'), $imageName);

        }
        if ($request->hasFile('proffimage')) {
            $proffimage = $request->file('proffimage');
            $proffimageName = time() . '.' . $proffimage->getClientOriginalExtension(); 
            $proffimage->move(public_path('home/home1block5'), $proffimageName);

        }





        $title=trim($request->title);
        $home1block5=new home11block5model;
        $home1block5->title=['en'=>$request->title, 'fr'=>$request->title_fr];
        $home1block5->description=$request->description;
        $home1block5->proffjob=$request->proffjob;
        $home1block5->nameproff=$request->nameproff;
        $home1block5->image = $imageName;
        $home1block5->proffimage = $proffimageName;
        $home1block5->link = $request->link;
        $home1block5->search = $request->search;
        $home1block5->created_by = Auth::User()->id;
        $home1block5->save();

        $slug=Str::slug($title,'-');
        $checkSlug=home11block5model::checkSlug($slug);
        if(empty($checkSlug)){
            $home1block5->slug=$slug;
            $home1block5->save();
        }
        else{
            $new_slug=$slug. '-'.$home1block5->id;
            $home1block5->slug=$new_slug;
            $home1block5->save();
        }
    

        
      
       return redirect('/new/home1');
    
}
    public function edithome1block5($id){
        $home1block5 = home11block5model::getSingle($id);
        return view("admin.fiche.homefiche.fiche-home1block5-edit", compact('home1block5'));
       

        
    }
    public function updatehome1block5(Request $request, $id)
    { 
        $home1block5 = home11block5model::getSingle($id);
        
        $home1block5->title = $request->input('title');
        $home1block5->setTranslation('title', 'fr', $request->input('title_fr'));
        $home1block5->nameproff = $request->input('nameproff');
        $home1block5->proffjob = $request->input('proffjob');
        $home1block5->description = $request->input('description');
        $home1block5->link = $request->input('link');
        $home1block5->search = $request->input('search');

    
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('home/home1block5'), $imageName); 
            $home1block5->image = $imageName;

        }
        if ($request->hasFile('proffimage')) {
            $request->validate([
                'proffimage' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
            
            $proffimage = $request->file('proffimage');
            $proffimageName = time() . '.' . $proffimage->getClientOriginalExtension(); 
            $proffimage->move(public_path('home/home1block5'), $proffimageName); 
            $home1block5->proffimage = $proffimageName;

        }

    

        
        $home1block5->save();
    
        return redirect('/new/home1');
    }
    public function destroyhome1block5($id){ 
        $home1block5=home11block5model::getSingle($id);
        $home1block5->delete();
        return redirect()->back();
    }






    public function add16(){
        return view("admin.fiche.homefiche.fiche-home1block6");
    }
    public function inserthome1block6(request $request){
        $imageName = null;

        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('home/home1block6'), $imageName);

        }






        $title=trim($request->title);
        $home1block6=new home11block6model;
        $home1block6->image = $imageName;
        $home1block6->created_by = Auth::User()->id;
        $home1block6->save();

        $slug=Str::slug($title,'-');
        $checkSlug=home11block6model::checkSlug($slug);
        if(empty($checkSlug)){
            $home1block6->slug=$slug;
            $home1block6->save();
        }
        else{
            $new_slug=$slug. '-'.$home1block6->id;
            $home1block6->slug=$new_slug;
            $home1block6->save();
        }
    

        
      
       return redirect('/new/home1');
    
}
    public function edithome1block6($id){
        $home1block6 = home11block6model::getSingle($id);
        return view("admin.fiche.homefiche.fiche-home1block6-edit", compact('home1block6'));
       

        
    }
    public function updatehome1block6(Request $request, $id)
    { 
        $home1block6 = home11block6model::getSingle($id);
        


    
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('home/home1block5'), $imageName); 
            $home1block6->image = $imageName;

        }


    

        
        $home1block6->save();
    
        return redirect('/new/home1');
    }
    public function destroyhome1block6($id){ 
        $home1block6=home11block6model::getSingle($id);
        $home1block6->delete();
        return redirect()->back();
    }






    public function add17(){
        return view("admin.fiche.homefiche.fiche-home1block7");
    }
    public function inserthome1block7(request $request){
        $imageName = null;

        $request->validate([
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link'=> 'nullable|url',

        ]);

    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('home/home1block7'), $imageName);

        }






        $title=trim($request->title);
        $home1block7=new home11block7model;
        $home1block7->title=['en'=>$request->title, 'fr'=>$request->title_fr];
        $home1block7->image = $imageName;
        $home1block7->link = $request->link;
        $home1block7->created_by = Auth::User()->id;
        $home1block7->save();

        $slug=Str::slug($title,'-');
        $checkSlug=home11block7model::checkSlug($slug);
        if(empty($checkSlug)){
            $home1block7->slug=$slug;
            $home1block7->save();
        }
        else{
            $new_slug=$slug. '-'.$home1block7->id;
            $home1block7->slug=$new_slug;
            $home1block7->save();
        }
    

        
      
       return redirect('/new/home1');
    
}
    public function edithome1block7($id){
        $home1block7 = home11block7model::getSingle($id);
        return view("admin.fiche.homefiche.fiche-home1block7-edit", compact('home1block7'));
       

        
    }
    public function updatehome1block7(Request $request, $id)
    { 
        $home1block7 = home11block7model::getSingle($id);
        
        $home1block7->title = $request->input('title');
        $home1block7->setTranslation('title', 'fr', $request->input('title_fr'));
        $home1block7->link = $request->input('link');


    
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
            ]);
            
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); 
            $image->move(public_path('home/home1block7'), $imageName); 
            $home1block7->image = $imageName;

        }


    

        
        $home1block7->save();
    
        return redirect('/new/home1');
    }
    public function destroyhome1block7($id){ 
        $home1block7=home11block7model::getSingle($id);
        $home1block7->delete();
        return redirect()->back();
    }



}
