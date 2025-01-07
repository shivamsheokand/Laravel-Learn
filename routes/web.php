<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserForm;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/form', function () {
    return view('user-form');
});
Route::post('addUser', [userForm::class, 'addUser'] );