<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
class UserAuth extends Controller
{
     function login(Request $req){
    $user = User::where('email', $req->email)->first();
    // Check if user exists and if the password matches the hashed password
    if (!$user || !Hash::check($req->password, $user->password)) {
        return ['Login Failed' => true, 'success' => false, 'message' => "User Login Failed"];
    }

    // If login is successful, generate a token
    $success['token'] = $user->createToken('test')->plainTextToken;
    return ['success' => true, 'result' => $success, 'message' => "User Login Success"];
}









function signup(Request $req){
    $input = $req->all();
    // Hash the password before saving to the database
    $input['password'] = bcrypt($input['password']);
    $user = User::create($input); // Create a new user
    $success['token'] = $user->createToken('test')->plainTextToken; // Generate the token
    return ['success' => true, 'result' => $success, 'message' => "User registration successful"];
}
}
