<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class home11block3model extends Model
{
    use HasTranslations;
    use HasFactory;
    protected $table="home1block3";
    public $translatable = ['title'];
    static public function checkSlug($slug){
        return self::where('slug','=',$slug)->count();
    }
    static public function getSingle($id){
        return self::find($id);
    }
    static public function getRecord() {
        return self::select('home1block3.*', 'home1block3.title->en as Title_en') 
        ->join('users', 'users.id', '=', 'home1block3.created_by') 
        ->orderBy('home1block3.id', 'desc') 
        ->get();
    }
}
