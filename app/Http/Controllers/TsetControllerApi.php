<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Test;

class TsetControllerApi extends Controller
{
    function testapi(){
        $data = Test::all();
        return $data;
    }
    function postapi(Request $req){
        $rules = array(
            'name'=>'required | min:3 | max:10',
            'email'=>'required ',
            'password'=>'required | min:5 | max:10',
        );
        $validation = Validator::make($req->all(),$rules);
        if($validation->fails()){
            return $validation->errors();
        }else{
        $data = new Test();
        $data->name=$req->name;
        $data->email=$req->email;
        $data->password=$req->password;
        if($data->save()){
            return "data added sucess";
        }else{
            return "data not added";
        }
    }
    }
    function putapi(Request $req,$id){
        // return "put api called";
        $user = Test::find($id);
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=$req->password;
        $user->save();
        if($user->save()){
            return "data update sucess";
        }else{
            return "data not updated";
        }
    }
    function deleteapi($id){
        $data = Test::destroy($id);
        if($data){
            return "data delelte sucess";
        }else{
            return "data not deleted";
        }
    }
}   
