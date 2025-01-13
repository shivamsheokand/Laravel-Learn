<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    //
    function Login(Request $req){
        $req->session()->put('name',$req->input('name'));
        $req->session()->put('all',$req->input());
        // echo session('name');
        return redirect('profile');
    }
    function Logout(Request $req){
    session()->pull('name');
        // echo session('name');
        return redirect('form');
    }
}
