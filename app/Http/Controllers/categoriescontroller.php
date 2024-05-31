<?php

namespace App\Http\Controllers;
use App\Models\categoriesmodel;

use Illuminate\Http\Request;

class categoriescontroller extends Controller
{
    public function show($slug)
{
    $category = categoriesmodel::where('slug', $slug)->firstOrFail();
    return view('categories', compact('category'));
}
}
