<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});

Route::view("addUser","add-uesr");
Route::post('addUser',[UserController::class,"adduser"]);
