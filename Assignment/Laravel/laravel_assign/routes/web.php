<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('website.index');
});
Route::get('/Blog', function () {
    return view('website.blog');
});
Route::get('/About', function () {
    return view('website.about');
});
Route::get('/Profile', function () {
    return view('website.profile');
});
