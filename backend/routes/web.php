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
Auth::routes();

Route::prefix('api')->group(function() {
    Route::get('/categories', 'CategoryController@index');
    Route::post('/categories', 'CategoryController@store');

});

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');
