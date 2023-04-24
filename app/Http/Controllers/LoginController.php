<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login(){
        return view('login');
    }

    public function signup(){
        return view('sign_up');
    }


    public function signin(){
        return view('sign_up');
    }


    public function forgotpassword(){
        return view('forgotpassword');
    }

}
