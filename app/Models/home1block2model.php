<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class home1block2model extends Model
{
    use HasTranslations;
    use HasFactory;
    protected $table="homeblock2";
    public $translatable = ['title','description'];
    static public function checkSlug($slug){
        return self::where('slug','=',$slug)->count();
    }
    static public function getSingle($id){
        return self::find($id);
    }
    static public function getRecord() {
        return self::select('homeblock2.*', 'homeblock2.title->en as Title_en','homeblock2.description->en as description_en','homeblock2.image as image') 
        ->join('users', 'users.id', '=', 'homeblock2.created_by') 
        ->orderBy('homeblock2.id', 'desc') 
        ->get();
    }
}
