<?php

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
    return view('wars.home');
});

Route::get('/vote', function () {
    return view('wars.vote');
});

Route::get('/result', function () {
    return view('wars.result');
});
