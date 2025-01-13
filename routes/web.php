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

Route::get('users',[UserController::class,'userdata']);

// queries
Route::get('queries',[UserDbController::class,'queries']);

Route::get('user',[UserController::class,'user']);
Route::post('get',[UserController::class,'post']);
Route::put('get',[UserController::class,'put']);
Route::delete('get',[UserController::class,'delete']);