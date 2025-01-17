<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
class TsetControllerApi extends Controller
{
    function testapi(){
        $data = Test::all();
        return $data;
    }
    function postapi(Request $req){
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
