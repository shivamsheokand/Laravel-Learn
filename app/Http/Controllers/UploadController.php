<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    function upload(Request $req){
        // $path = $req->file('file')->store('public');
        // $path = $req->file('file')->store('public');
        $path = $req->file('file')->store('public');

        $fileArr=explode("/",$path);
        $fileName=$fileArr[1];
        // echo $path;
        return view("display",['path'=>$fileName]);
    }
}
