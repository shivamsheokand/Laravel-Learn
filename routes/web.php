<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Middleware\AgeCheck;
use  App\Http\Controllers\UserDbController;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});

Route::view('about','about')->middleware(AgeCheck::class); // short way to show view

// Route::get('user',[UserDbController::class, 'user']);

// Route::view('user','users');

Route::get('form',[UserController::class,'user']);

// queries
Route::get('queries',[UserDbController::class,'queries']);

// Route::get('user',[UserController::class,'user']);
// Route::post('user',[UserController::class,'post']);
// Route::put('user',[UserController::class,'put']);
// Route::delete('user',[UserController::class,'delete']);

// Route::any('usermethod',[UserController::class,'any']);

Route::match(['get','post'],'user',[UserController::class, 'group1']);
Route::match(['put','delete'],'user',[UserController::class, 'group2']);