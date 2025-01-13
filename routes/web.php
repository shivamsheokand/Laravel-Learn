<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Middleware\AgeCheck;
use  App\Http\Controllers\UserDbController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Login;
use App\Http\Controllers\UploadController;
Route::get('/', function () {
    return view('welcome');
});

Route::view('about','about')->middleware(AgeCheck::class); // short way to show view

// Route::get('user',[UserDbController::class, 'user']);

// Route::view('user','users');

Route::view('upload','upload');
Route::view('display','display');
Route::post('uploads',[UploadController::class,'upload']);
// Route::view('profile','profile');
