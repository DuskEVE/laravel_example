<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
    // return view('welcome');
});
Route::get('/one', function () {
    return view('index');
    // return view('welcome');
});
Route::get('/two', function () {
    return view('index');
    // return view('welcome');
});
