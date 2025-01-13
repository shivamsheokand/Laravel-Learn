<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    //
    function Login(Request $req){
        // $req->session()->put('name',$req->input('name'));
        // $req->session()->put('all',$req->input());
       session()->flash('message', 'Your profile has been updated!');
        // echo session('name');
        return redirect('form');
        // return view('form');
    }
    function Logout(Request $req){
    session()->pull('name');
        // echo session('name');
        return redirect('form');
    }
}
