<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class partenairemodel extends Model
{
    use HasTranslations;
    use HasFactory;
    protected $table="partenaire";
    public $translatable = ['title'];
    static public function checkSlug($slug){
        return self::where('slug','=',$slug)->count();
    }
    static public function getSingle($id){
        return self::find($id);
    }
    static public function getRecord() {
        return self::select('partenaire.*')
        ->join('users', 'users.id', '=', 'partenaire.created_by')
        ->orderBy('partenaire.id', 'desc')
        ->get();
    }
}
