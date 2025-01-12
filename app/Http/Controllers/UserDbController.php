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
        // $result = DB::table('users')->first();
        // $result = [$result];
        // echo $result;
        // return $result;
        // return view('users',['data'=>$result]);


        // insert
        // $result = DB::table('users')->insert([
        //     'name'=>'tony',
        //     'email'=>'tony@gmail.com',
        //     'password'=>'tony',
        // ]);
        // if($result){
        //     return 'Data added sucess';
        // }else{
        //     return 'Data not added ';
        // }


        // update

        $res = DB::table('users')->where('email','sam1@gmail.com')->update(['name'=>'sam1']);

        if($res){
            return "data Updated";
        }else{
            return "data update feaild";
        }
        // $result = DB::table('users')->get();
        // return view('users',['data'=>$result]);
    }
}
