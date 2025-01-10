<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('about','about')->middleware('check1'); // short way to show view



Route::middleware('check1')->group(function(){
Route::view('home','home');
Route::view('list','home');
Route::view('test','home');
Route::view('cont','home');
});