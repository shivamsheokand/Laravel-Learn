<?php

use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TsetControllerApi;
use App\Http\Controllers\TestRecourceController;
use App\Http\Controllers\UserAuth;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/testapi',function(){
    return ['name'=>"sam"];
});
Route::get('/testapi',[TsetControllerApi::class,'testapi']);
Route::post('/testapi',[TsetControllerApi::class,'postapi']);
Route::put('/testapi/{id}',[TsetControllerApi::class,'putapi']);
Route::delete('/testapi/{id}',[TsetControllerApi::class,'deleteapi']);

// resource flag
Route::resource('/res',TestRecourceController::class);


Route::post('signup',[UserAuth::class,'signup']);
