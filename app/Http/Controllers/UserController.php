<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\User;
// use  App\Models\User;
class UserController extends Controller
{
    //
    function adduser(Request $req){
        // return $req->input();
        // return $req->name;
        $user = new User();
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=$req->password;
        $user->save();
        if($user){
            echo "new data added";
            $data = DB::table('users')->get();

            return view('users',["data"=>$data]);
        }else{
            return "error";
        }

        // $data = DB::table("users")->insert([
        //     "name"=>$req->name,
        //     "email"=>$req->email,
        //     "password"=>$req->password,
        // ]);
        // if($data){
        //     $data = DB::table('users')->get();

        //     return view('users',["data"=>$data]);
        // }else{
        //     return "error";
        // }
    }
}
