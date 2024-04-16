<?php

use Illuminate\Support\Facades\Route;
use App\Models\Basic;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/basic', function () {
    return view('basic.index', ['datas'=>Basic::searchAll()]);
});
