<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class home1model extends Model
{
    use HasTranslations;
    use HasFactory;
    protected $table="homeblock1";
    public $translatable = ['title','_title','image'];
    static public function checkSlug($slug){
        return self::where('slug','=',$slug)->count();
    }
    static public function getSingle($id){
        return self::find($id);
    }
    static public function getRecord() {
        return self::select('homeblock1.*', 'homeblock1.title->en as Title_en','homeblock1._title->en as _Title_en','homeblock1.image as image') 
        ->join('users', 'users.id', '=', 'homeblock1.created_by') 
        ->orderBy('homeblock1.id', 'desc') 
        ->get();
    }
}

