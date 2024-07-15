<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/booking', function () {
    return view('master');
});
Route::get('/landing', function () {
    return view('landingpage');
});
Route::get('/about', function () {
    return view('aboutus');
});