<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactus;
use App\Mail\commentaire;



use Illuminate\Http\Request;

class contactformcontroller extends Controller
{
    public function show()
    {
        return view('contact');

    }
    public function send()
    {
        $data=request()->validate([
            'name'=> 'required|min:3',
            'phone'=> 'required|min:3',
            'email'=> 'required|min:3',
            'message'=> 'required|min:3',

        ]);
        Mail::to('moezjarboui9@gmail.com')->send(new contactus($data));
        //dd('sent');
        return redirect()->back()->with('success','Message sent successfully');
    }
    
}
