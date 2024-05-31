<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class home11block5model extends Model
{
    use HasTranslations;
    use HasFactory;
    protected $table="home1block5";
    public $translatable = ['title'];
    static public function checkSlug($slug){
        return self::where('slug','=',$slug)->count();
    }
    static public function getSingle($id){
        return self::find($id);
    }
    static public function getRecord() {
        return self::select('home1block5.*', 'home1block5.title->en as Title_en') 
        ->join('users', 'users.id', '=', 'home1block5.created_by') 
        ->orderBy('home1block5.id', 'desc') 
        ->get();
    }
}