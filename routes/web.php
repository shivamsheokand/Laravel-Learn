<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImgCont;
Route::get('/', function () {
    return view('welcome');
});

// Route::view("addUser","add-uesr");
// // Route::view("users","users");
// Route::get('users',[UserController::class,"user"]);
// Route::get('search',[UserController::class,"search"]);
// Route::get('delete/{id}',[UserController::class,"delete"]);
// Route::get('edit/{id}',[UserController::class,"edit"]);
// Route::post('addUser',[UserController::class,"adduser"]);
// Route::post('deletemut',[UserController::class,"deletemut"]);
// Route::put('edit/{id}',[UserController::class,"updatedata"]);
Route::view('about','about');
Route::view('addimg','uploadimg');
Route::post('uploadimg',[ImgCont::class,'upload']);
Route::get('displayimg',[ImgCont::class,'display']);