<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class home11block7model extends Model
{
    use HasTranslations;
    use HasFactory;
    protected $table="home1block7";
    public $translatable = ['title'];
    static public function checkSlug($slug){
        return self::where('slug','=',$slug)->count();
    }
    static public function getSingle($id){
        return self::find($id);
    }
    static public function getRecord() {
        return self::select('home1block7.*', 'home1block7.title->en as Title_en') 
        ->join('users', 'users.id', '=', 'home1block7.created_by') 
        ->orderBy('home1block7.id', 'desc') 
        ->get();
    }
}
