<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class home1block4model extends Model
{
    use HasTranslations;
    use HasFactory;
    protected $table="homeblock4";
    public $translatable = ['title','description'];
    static public function checkSlug($slug){
        return self::where('slug','=',$slug)->count();
    }
    static public function getSingle($id){
        return self::find($id);
    }
    static public function getRecord() {
        return self::select('homeblock4.*', 'homeblock4.title->en as Title_en','homeblock4.description->en as description_en','homeblock4.image as image') 
        ->join('users', 'users.id', '=', 'homeblock4.created_by') 
        ->orderBy('homeblock4.id', 'desc') 
        ->get();
    }
}
