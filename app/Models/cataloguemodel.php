<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class cataloguemodel extends Model
{
    use HasTranslations;
    use HasFactory;
    protected $table="catalogue";
    public $translatable = ['title'];
    static public function checkSlug($slug){
        return self::where('slug','=',$slug)->count();
    }
    static public function getSingle($id){
        return self::find($id);
    }
    static public function getRecord() {
        return self::select('catalogue.*')
        ->join('users', 'users.id', '=', 'catalogue.created_by')
        ->orderBy('catalogue.id', 'desc')
        ->get();
    }
}
