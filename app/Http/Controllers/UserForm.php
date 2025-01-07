<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserForm extends Controller
{
    function addUser(Request $req){
        // echo "user Form submint";
        // return $req;
        echo "User Name is $req->username";
        echo"<br>";
        echo "User Email is $req->email";
        echo"<br>";
        echo "User City is $req->city";
        echo"<br>";
        print_r ( $req->check);
    }
}
