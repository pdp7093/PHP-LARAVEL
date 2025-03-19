<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',[ProductController::class,'show']);
Route::get('/Add_product',[ProductController::class,'create']);
Route::post('/Add_product',[ProductController::class,'store']);
Route::get('/delete/{id}',[ProductController::class,'destroy']);
Route::get('/edit/{id}',[ProductController::class,'edit']);
Route::post('/edit/{id}',[ProductController::class,'update']);