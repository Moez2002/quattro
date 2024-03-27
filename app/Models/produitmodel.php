<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class produitmodel extends Model
{
    use HasFactory;
    use HasTranslations;
    
    protected $table="produit";
    public $translatable = ['title','description','category','sub_category'];
    protected $casts = [
        'category' => 'array',
        'sub_category' => 'array'

    ];

    static public function checkSlug($slug){
        return self::where('slug','=',$slug)->count();
    }
    static public function getSingle($id){
        return self::find($id);
    }
    static public function getRecord() {
        return self::select('produit.*')
        ->join('users', 'users.id', '=', 'produit.created_by')
        ->orderBy('produit.id', 'desc')
        ->get();
    }
}
