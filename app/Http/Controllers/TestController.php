<?php

namespace App\Http\Controllers;
use App\Models\Test;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    function test(){
        // return "test Function";
        $data=Test::paginate(10);
        return view('test',['data'=>$data]);
    }
    function TestMut(Request $req){
        // return "test mut";
        $data = new Test();
        $data->name="test";
        $data->password="test";
        $data->email="test@gmail.com";
        $data->save();
        if($data){
            return "data added sucess";
        }else{
            return "data not added";
        }
    }
}
