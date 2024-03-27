<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class ActualitésModel extends Model
{
    use HasTranslations;
    use HasFactory;
    protected $table="actualités";
    public $translatable = ['title','description'];
    static public function checkSlug($slug){
        return self::where('slug','=',$slug)->count();
    }
    static public function getSingle($id){
        return self::find($id);
    }
    static public function getRecord() {
        return self::select('actualités.*') 
        ->join('users', 'users.id', '=', 'actualités.created_by') 
        ->orderBy('actualités.id', 'desc') 
        ->get();
    }
}
