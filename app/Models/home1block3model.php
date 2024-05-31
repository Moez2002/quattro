<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class home1block3model extends Model
{
    use HasTranslations;
    use HasFactory;
    protected $table="homeblock3";
    public $translatable = ['title'];
    static public function checkSlug($slug){
        return self::where('slug','=',$slug)->count();
    }
    static public function getSingle($id){
        return self::find($id);
    }
    static public function getRecord() {
        return self::select('homeblock3.*', 'homeblock3.title->en as Title_en','homeblock3.image as image') 
        ->join('users', 'users.id', '=', 'homeblock3.created_by') 
        ->orderBy('homeblock3.id', 'desc') 
        ->get();
    }
}
