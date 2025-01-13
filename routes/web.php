<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Middleware\AgeCheck;
use  App\Http\Controllers\UserDbController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Login;
Route::get('/', function () {
    return view('welcome');
});

Route::view('about','about')->middleware(AgeCheck::class); // short way to show view

// Route::get('user',[UserDbController::class, 'user']);

// Route::view('user','users');

Route::view('form','login');
Route::view('profile','profile');

// queries
// Route::get('queries',[UserDbController::class,'queries']);

// Route::get('user',[UserController::class,'Data']);
// Route::post('user',[UserController::class,'Data']);
// Route::get('user',[UserController::class,'user']);
// Route::put('user',[UserController::class,'put']);
// Route::delete('user',[UserController::class,'delete']);

// Route::any('usermethod',[UserController::class,'any']);

// Route::match(['get','post'],'user',[UserController::class, 'group1']);
// Route::match(['put','delete'],'user',[UserController::class, 'group2']);

Route::post('user',[Login::class,'Login']);
Route::get('logout',[Login::class,'Logout']);
