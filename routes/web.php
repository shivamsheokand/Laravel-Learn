<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Middleware\AgeCheck;
Route::get('/', function () {
    return view('welcome');
});

Route::view('about','about')->middleware(AgeCheck::class); // short way to show view


