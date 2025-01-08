<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserForm;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/form', function () {
    return view('user-form');
});

Route::get('/home',function(){
    return view('home');
});
Route::get('/about/{name}',function(){
    return view('about');
});
// Route::get('/about',function(){
//     return view('about');
// });
Route::view('about','about'); // short way to show view
Route::post('addUser', [userForm::class, 'addUser'] );