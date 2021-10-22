<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('links');
});

Route::get('/start', function () {
    return view('start');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/blog', function () {
    return view('blog');
});



