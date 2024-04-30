<?php

use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Route;
use App\Models\Basic;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/basic', [BasicController::class, 'index']);

Route::get('/basic/create', [BasicController::class, 'create']);

Route::post('/basic/store', [BasicController::class, 'store']);

Route::get('/basic/edit/{id}', [BasicController::class, 'edit']);

Route::put('/basic/edit/update/{id}', [BasicController::class, 'update']);

Route::delete('/basic/delete/{id}', [BasicController::class, 'destroy']);

Route::get('/basic/{id}', [BasicController::class, 'show']);