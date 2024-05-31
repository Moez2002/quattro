<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;



class authcontroller extends Controller
{
    public function login_admin(){
        if((Auth::check()&& auth::user()->is_admin==1)){
            return redirect('/new/home1');

        }
       
        return view('admin.auth.login');
    }
    public function auth_login_admin(request $request){
        $remember = !empty($request ->remember) ? true : false;
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password,'is_admin'=>1 ], $remember))
        {
            return redirect('/new/home1');

        }
        else
        {
            return redirect()->back()->with('error',"please enter correct email and password" );

        }

    }
    public function logout_admin(){
        auth::logout();

        return view('admin.auth.login');
    }
}
