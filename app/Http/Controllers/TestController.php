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
}
