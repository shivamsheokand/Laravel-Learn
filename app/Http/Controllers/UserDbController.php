<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserDbController extends Controller
{
    //
    function users(){
        // echo "this is users function";
        return DB::select('select * from users');
    }
}
