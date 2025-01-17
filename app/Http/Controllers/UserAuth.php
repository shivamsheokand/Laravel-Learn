<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
class UserAuth extends Controller
{
    function login(){
        return "login";
    }
    function signup(Request $req){
        $input = $req->all();
        $input['password']=bcrypt($input['password']);
        $user=User::create($input);
        $sucess['token']=$user->createToken('test')->plainTextToken;
        return ['sucess'=>true,"result"=>$sucess,'message'=>"User register Sucess"];
    }
}
