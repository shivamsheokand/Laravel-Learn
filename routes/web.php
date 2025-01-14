<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});

Route::view("addUser","add-uesr");
// Route::view("users","users");
Route::get('users',[UserController::class,"user"]);
Route::get('delete/{id}',[UserController::class,"delete"]);
Route::post('addUser',[UserController::class,"adduser"]);
