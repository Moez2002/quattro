<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class categoriesmodel extends Model
{
    use HasTranslations;
    use HasFactory;
    protected $table="categories";
    public $translatable = ['title','description'];
    static public function checkSlug($slug){
        return self::where('slug','=',$slug)->count();
    }
    static public function getSingle($id){
        return self::find($id);
    }
    static public function getRecord() {
        return self::select('categories.*')
        ->join('users', 'users.id', '=', 'categories.created_by')
        ->orderBy('categories.id', 'desc')
        ->get();
    }
}
