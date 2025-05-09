<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return view('website.index');
});

Route::get('/Login',[CustomerController::class,'index']);
//signup
Route::get('/Signup',[CustomerController::class,'create']);
Route::post('/Signup',[CustomerController::class,'store']);

Route::get('/About', function () {
    return view('website.about');
});
//Contact
Route::get('/Contact',[ContactController::class,'create']);
Route::post('/Contact',[ContactController::class,'store']);

Route::get('/Categories',[CategoryController::class,'index']);

Route::get('/service', function () {
    return view('website.service');
});
Route::get('/gallery', function () {
    return view('website.gallery');
});


//Admin Routing

Route::get('/admin-login', function () {
    return view('admin.login');
});

Route::get('/dashboard', function () {
    return view('admin.index');
});

//Categories
Route::get('/Add_Categories', [CategoryController::class,'create']);
Route::post('/Add_Categories', [CategoryController::class,'store']);
Route::get('/Manage_Categories', [CategoryController::class,'show']);
Route::get('/Manage_Categories/{id}', [CategoryController::class,'destory']);


//Products
Route::get('/Add_Products', [ProductController::class,'create']);
Route::post('/Add_Products', [ProductController::class,'store']);
Route::get('/Manage_Products', [ProductController::class,'show']);
Route::get('/Manage_Products/{id}', [ProductController::class,'destroy']);


//Orders
Route::get('/Add_Orders', [OrderController::class,'create']);
Route::get('/Manage_Orders', [OrderController::class,'show']);
Route::get('/Manage_Orders/{id}', [OrderController::class,'destroy']);

//Contact
Route::get('/Manage_Contact', [ContactController::class,'show']);
Route::get('/Manage_Contact/{id}', [ContactController::class,'destroy']);

//Users
Route::get('/Manage_Users', [CustomerController::class,'show']);
Route::get('/Manage_Users/{id}', [CustomerController::class,'destroy']);

