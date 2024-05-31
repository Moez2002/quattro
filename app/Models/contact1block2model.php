<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class contact1block2model extends Model
{
    
    use HasFactory;
    protected $table="contact";
    static public function checkSlug($slug){
        return self::where('slug','=',$slug)->count();
    }
    static public function getSingle($id){
        return self::find($id);
    }
    static public function getRecord() {
        return self::select('contact.*') 
        ->join('users', 'users.id', '=', 'contact.created_by') 
        ->orderBy('contact.id', 'desc') 
        ->get();
    }
}