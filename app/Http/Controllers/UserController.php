<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
class UserController extends Controller
{
    //
    function getUser(){
        return view("user");
    }
    function getAbout(){
        return view("about");
    }
    function getUserName($name){
        return view("getuser",['name'=>$name]);
    }
    function adminLogin(){
        if(View::exists('admin.signup')){
                return view("admin.signup");
        }else{
            echo "Route not Found :)";
        }
    }
    function adminDemo(){
        return view("admin.demo.demo");
    }
}
