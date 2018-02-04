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

Route::get('/', [
    'as' => 'home', 'uses' => 'WarController@home'
]);

Route::get('/play', [
    'as' => 'play', 'uses' => 'WarController@play'
]);

Route::get('/endpoint/{endpoint}', [
    'as' => 'endpoint', 'uses' => 'WarController@endpoint'
]);

Route::post('/endpoint/{endpoint}', [
    'as' => 'endpoint', 'uses' => 'WarController@vote'
]);
