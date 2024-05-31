<?php

namespace App\Http\Controllers;
use App\Models\ActualitésModel;

use Illuminate\Http\Request;

class actualitescontroller extends Controller
{
    public function actualités()
    {
        return view ('actualités');

    }
    public function show($slug)
{
    $actualités = ActualitésModel::where('slug', $slug)->firstOrFail();
    return view('detailactualités', compact('actualités'));
}
}
