<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
// use  App\Models\User;
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
    // function user(){
    //     return view('home');
    // }
    //  function get(Request $req){
    //     return $req;
    // } function post(){
    //     return "post method called";
    // }
    //  function put(){
    //     return "put method called";
    // }
    //  function delete(){
    //     return "delete method called";
    // }
    //  function any(){
    //     return "any method called";
    // }
    // function group1(){
    //     return "group1 method called";
    // }
    // function group2(){
    //     return "group2 method called";
    // }

    //  user Database

    function Data(Request $res){
        // $data = User::get();
        // return $data;
        $result = DB::table('users')->insert([
            'name'=>$res->name,
            'email'=>$res->email,
            'password'=>$res->password,
        ]);
        if($result){
            $res =DB::table('users')->get();
        }else{
            return 'Data not added ';
        }


    }
}
