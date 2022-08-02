<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\api\Authcontroller;
use App\Http\Controllers\api\ProductController;

 
Route::post('register', [Authcontroller::class, 'register']);
Route::post('login', [Authcontroller::class, 'login']);
  
Route::middleware('auth:api')->group(function () {
    Route::get('get-user', [Authcontroller::class, 'userInfo']);

  Route::resource('products', ProductController::class);
 
});
