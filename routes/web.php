<?php

use Illuminate\Support\Facades\Route;
use App\Models\Basic;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/basic', function () {
    return view('basic.index', ['datas'=>Basic::searchAll()]);
});

Route::get('/basic/{id}', function ($id) {
    // dd(Basic::search($id));
    return view('basic.index', ['data'=>Basic::search($id), 'id'=>$id]);
});