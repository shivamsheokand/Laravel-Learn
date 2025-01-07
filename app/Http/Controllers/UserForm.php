<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserForm extends Controller
{
    function addUser(Request $req){
        // return $req;
        echo $req->username;
    echo "<br>";
        echo $req->email;
        echo "<br>";
        echo $req->city;
    }
}
