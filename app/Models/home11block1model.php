<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class home11block1model extends Model
{
    use HasTranslations;
    use HasFactory;
    protected $table="home1block1";
    public $translatable = ['title','description','namelink'];
    static public function checkSlug($slug){
        return self::where('slug','=',$slug)->count();
    }
    static public function getSingle($id){
        return self::find($id);
    }
    static public function getRecord() {
        return self::select('home1block1.*', 'home1block1.title->en as Title_en','home1block1.description->en as description_en','home1block1.namelink->en as namelink_en') 
        ->join('users', 'users.id', '=', 'home1block1.created_by') 
        ->orderBy('home1block1.id', 'desc') 
        ->get();
    }
}
