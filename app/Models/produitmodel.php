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
    public function images()
{
    return $this->hasMany(ProduitImage::class);
}
    public $translatable = ['title','description','mini_description'];
    protected $casts = [
        'category' => 'array',
        'subcategory' => 'array',
    ];


    static public function checkSlug($slug){
        return self::where('slug','=',$slug)->count();
    }
    static public function getSingle($id){
        return self::find($id);
    }
    static public function getRecord() {
        return self::select('produit.*', 'produit.title->en as Title_en','produit.description->en as description_en','produit.mini_description->en as mini_description_en')
        ->join('users', 'users.id', '=', 'produit.created_by')
        ->orderBy('produit.id', 'desc')
        ->get();
    }
}
