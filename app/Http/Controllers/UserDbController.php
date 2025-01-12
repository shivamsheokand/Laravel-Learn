<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use  App\Models\User;
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

        // $res = DB::table('users')->where('email','sam1@gmail.com')->update(['name'=>'sam1']);

        // if($res){
        //     return "data Updated";
        // }else{
        //     return "data update feaild";
        // }
        // $result = DB::table('users')->get();
        // return view('users',['data'=>$result]);
        // $res=DB::table('users')->where('email','sam1@gmail.com')->delete();

        // if($res){
        //     return "data deleted";
        // }else{
        //     return "data delete feaild";
        // }


        $res=User::all();
        // $res=User::where("email","sam@gmail.com")->get();
        // $res=User::where("email","sam@gmail.com")->first();
        // $res =[$res];

        // insert 
        // $result = DB::table('users')->insert([
        //     'name'=>'raju',
        //     'email'=>'raju@gmail.com',
        //     'password'=>'raju',
        // ]);
        // if($result){
        //     return 'Data added sucess';
        // }else{
        //     return 'Data not added ';
        // }
        
        // $res=User::where('name','raju')->update(['password'=>'123']);
        // if($res){
        //     return "data updated";
        // }else{
        //     return "data update field";
        // }
        // $res=User::where('name','raju')->delete();
        // if($res){
        //     return "data deleted";
        // }else{
        //     return "data delete field";
        // }
        return view('users',['data'=>$res]);

    }
}
