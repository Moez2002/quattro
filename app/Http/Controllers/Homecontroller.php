<?php

namespace App\Http\Controllers;

use App\Models\home11block5model;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function home()
    {
        return view ('home');

    }
    public function projects($slug)
{
    $home1block5 = home11block5model::where('slug', $slug)->firstOrFail();
    return view('projects', compact('home1block5'));
}
}
