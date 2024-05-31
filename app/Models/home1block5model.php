<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class home1block5model extends Model
{
    use HasTranslations;
    use HasFactory;
    protected $table="abonnes";
    public $translatable = ['title','description','commentaire'];
    static public function checkSlug($slug){
        return self::where('slug','=',$slug)->count();
    }
    static public function getSingle($id){
        return self::find($id);
    }
    static public function getRecord() {
        return self::select('abonnes.*', 'abonnes.title->en as Title_en','abonnes.description->en as description_en','abonnes.commentaire->en as commentaire_en') 
        ->join('users', 'users.id', '=', 'abonnes.created_by') 
        ->orderBy('abonnes.id', 'desc') 
        ->get();
    }
}