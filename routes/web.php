<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/f1', function () {
    return view('hotel.f1');
})->name('test_01');
Route::get('/f2', function () {
    return view('hotel.f2');
})->name('test_02');
Route::get('/f3', function () {
    return view('hotel.f3');
})->name('test_03');
Route::get('/students', function () {
    return view('student.index');
})->name('student');
Route::get('home', function () {
    return view('home');
});
Route::get('/user-{id}', function(int $id){
    dd($id);
});