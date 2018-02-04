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

Route::get('/', ['as' => 'home', function () {
    return view('wars.home');
}]);

Route::get('/start', [
    'as' => 'start', 'uses' => 'WarController@start'
]);

Route::get('/endpoint/{endpoint}', [
    'as' => 'endpoint', 'uses' => 'WarController@endpoint'
]);

//Route::get('/endpoint/{endpoint}', 'WarController@endpoint');

/*Route::get('/result', function () {
    return view('wars.result');
});*/