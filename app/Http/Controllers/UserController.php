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
}
