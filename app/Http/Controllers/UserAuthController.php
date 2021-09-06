<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    //TODO: Add 4 functions
    public function loginForm(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
            ]);

        return view( 'user.auth.login');
    }
    public function registrationForm(Request $request){

            $request->validate([
                'email'=>'required',
                'name'=>'required',
                'phone_number'=>'required',
                'password'=>'required',
            ]);
        return view('user.auth.register');


    }
    public function login{


    }
    public function register{


    }
    //1: function loginForm
    //2: function registrationForm
    //3: function login (leave this empty for now)
    //4: function register (leave this empty for now)
}
