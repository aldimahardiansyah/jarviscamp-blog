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
    return view('index');
});

Route::get('/post/create', function () {
    return view('create');
});

Route::get('/post/edit', function () {
    return view('edit');
});

Route::get('/post/detail', function () {
    return view('detail');
});
