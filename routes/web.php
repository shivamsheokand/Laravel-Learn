<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Middleware\AgeCheck;
use  App\Http\Controllers\UserDbController;
Route::get('/', function () {
    return view('welcome');
});

Route::view('about','about')->middleware(AgeCheck::class); // short way to show view

Route::get('user',[UserDbController::class, 'user']);

// Route::view('user','users');