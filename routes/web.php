<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserForm;
use App\Http\Controllers\Home;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/form', function () {
    return view('user-form');
});

Route::get('/home',function(){
    return view('home');
});
Route::view('/home/profie/user','home')->name('hm');
Route::view('/home/profie/{name}','home')->name('user');
Route::get('/about/{name}',function(){
    return view('about');
});
// Route::get('/about',function(){
//     return view('about');
// });
Route::view('about','about'); // short way to show view
Route::post('addUser', [userForm::class, 'addUser'] );



Route::prefix('student')->group(function(){
Route::get('show',[Home::class,'show']);
Route::get('user',[Home::class,'user']);
});

