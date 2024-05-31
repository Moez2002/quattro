<?php

namespace App\Http\Controllers;

use App\Models\produitmodel;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
       
        $results = produitmodel::where('title', 'LIKE', "%{$query}%")
        ->orWhere('description', 'LIKE', "%{$query}%")
        ->orWhere('mini_description', 'LIKE', "%{$query}%")
        ->get(); // Example static results

        return view('search', ['query' => $query, 'results' => $results]);
    }

}
