<?php

use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TsetControllerApi;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/testapi',function(){
    return ['name'=>"sam"];
});
Route::get('/testapi',[TsetControllerApi::class,'testapi']);