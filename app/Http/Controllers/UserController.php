<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class UserController extends Controller
{
    //
    function userdata(){
        $data=Http::get('https://jsonplaceholder.typicode.com/posts');
        // return view('userdata',['data'=>$data]);
        // echo "<pre/>";
        $data=$data->body();

        return view('userdata',['data'=>json_decode($data)]);
    }
    function user(){
        return view('home');
    }
     function get(Request $req){
        return $req;
    } function post(){
        return "post method called";
    }
     function put(){
        return "put method called";
    }
     function delete(){
        return "delete method called";
    }
    
}
