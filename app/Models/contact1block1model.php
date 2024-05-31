<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class contact1block1model extends Model
{
    use HasTranslations;
    use HasFactory;
    protected $table="contactblock1";
    public $translatable = ['title','_title','image'];
    static public function checkSlug($slug){
        return self::where('slug','=',$slug)->count();
    }
    static public function getSingle($id){
        return self::find($id);
    }
    static public function getRecord() {
        return self::select('contactblock1.*','contactblock1.title->en as Title_en', 'contactblock1._Title->en as _Title_en','contactblock1.image as image') 
        ->join('users', 'users.id', '=', 'contactblock1.created_by') 
        ->orderBy('contactblock1.id', 'desc') 
        ->get();
    }
}