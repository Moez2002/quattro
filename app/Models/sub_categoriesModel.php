<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class sub_categoriesModel extends Model
{
    use HasFactory;
    use HasTranslations;
    
    protected $table="sub_categories";
    public $translatable = ['title','description','category'];
    protected $casts = [
        'category' => 'array'
    ];
    static public function checkSlug($slug){
        return self::where('slug','=',$slug)->count();
    }
    static public function getSingle($id){
        return self::find($id);
    }
    static public function getRecord() {
        return self::select('sub_categories.*')
        ->join('users', 'users.id', '=', 'sub_categories.created_by')
        ->orderBy('sub_categories.id', 'desc')
        ->get();
    }

}
