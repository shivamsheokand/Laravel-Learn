<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
// use  App\Models\User;
class UserController extends Controller
{
    //
    function adduser(Request $req){
        $data = DB::table("users")->insert([
            "name"=>$req->name,
            "email"=>$req->email,
            "password"=>$req->password,
        ]);
        if($data){
            $data = DB::table('users')->get();

            return view('users',["data"=>$data]);
        }else{
            return "error";
        }
    }
}
