<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserDbController extends Controller
{
    //
    function user(){
        // echo "this is users function";
        // $users= DB::select('select * from users');
        // return view('users',["users"=>$users]);
        $users= \App\Models\User::all();
        $data = new \App\Models\User;
        echo $data->testFun();
        return view('users',['data'=>$users]);

    }

    function queries(){
        // $result = DB::table('users')->get();
        // $result = DB::table('users')->where('email','sam@gmail.com')->get();
        $result = DB::table('users')->first();
        $result = [$result];
        // echo $result;
        // return $result;
        return view('users',['data'=>$result]);
    }
}
