<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    //
    // function show(){
    //     // return view('/home');
    //     return to_route('hm');
    // }
    function user(){
        return to_route('user',["name"=>"sam"]);
    }
}
