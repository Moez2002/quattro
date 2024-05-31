<?php

namespace App\Http\Controllers;
use App\Models\categoriesmodel;
use App\Models\produitModel;
use Illuminate\Http\Request;

class produit1controller extends Controller
{

    public function show($slug)
{
    $produit = Produitmodel::where('slug', $slug)->firstOrFail();
    return view('produit', compact('produit'));
}


}

