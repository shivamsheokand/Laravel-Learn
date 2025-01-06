<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/about/{name}', function ($name) {
    return view('about',['name'=>$name]);
});
Route::get('user', [UserController::class, 'getUser']);
Route::get('user/{name}', [UserController::class, 'getUserName']);
Route::get('admin', [UserController::class, 'adminLogin']);
// Route::get('about', [UserController::class, 'getAbout']);
Route::get('admin/demo', [UserController::class, 'adminDemo']);

// Route::view('/about','about');
// Route::view('/test','test');