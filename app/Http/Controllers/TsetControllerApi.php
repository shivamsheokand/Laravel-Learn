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
}
