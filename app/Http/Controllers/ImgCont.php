<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
class ImgCont extends Controller
{
    //
    function upload(Request $req){
        
        // // /$path = $req->file('file')->store('public');
        // $upload = $req->file('file')->store('public');

        // $fileArr=explode("/",$upload);
        $path= $req->file('img')->store('public');
        
            // return $path;
        if($path){
            $pathstr = explode('/',$path);
            $path=$pathstr[1];
            $upload = new Image();
            $upload -> path = $path;
            $upload->save();
            if($upload){
                // return "image upload sucess";
                return redirect('displayimg');
            }else{
                return "image not uploaded";
            }

        }
        // return $path;
    }
    function display(Request $req){
        $path = Image::all();
        // return $path;
        // echo $path;
        return view('displayimg',["img"=>$path]);
    }
}
