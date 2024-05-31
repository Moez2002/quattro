<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\commentaire;

use Illuminate\Http\Request;

class commentairecontroller extends Controller
{
    public function show1()
    {
        return view('produit.Quotationrequest');

    }
    public function send1()
    {
        $data=request()->validate([
            'name'=> 'required|min:3',
            'phone'=> 'required|min:3',
            'email'=> 'required|min:3',
            'message'=> 'required|min:3',

        ]);
        Mail::to('moezjarboui9@gmail.com')->send(new commentaire($data));
        //dd('sent');
        return redirect()->back()->with('success','Message sent successfully');
    }
}
