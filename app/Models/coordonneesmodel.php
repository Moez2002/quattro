<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;




class coordonneesmodel extends Model
{

    use HasFactory;
    use HasTranslations;
    public $translatable = ['title'];
    protected $table="coordonnees";
    static public function checkSlug($slug){
        return self::where('slug','=',$slug)->count();
    }
    static public function getSingle($id){
        return self::find($id);
    }
    static public function getRecord() {
        return self::select('coordonnees.*','coordonnees.title->en as Title_en') 
        ->join('users', 'users.id', '=', 'coordonnees.created_by') 
        ->orderBy('coordonnees.id', 'desc') 
        ->get();
    }
}