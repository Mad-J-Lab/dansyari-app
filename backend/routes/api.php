<?php

use Illuminate\Http\Request;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WantController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categories', 'CategoryController@index');
Route::post('/categories', 'CategoryController@store');
Route::get('/categories/{category}', 'CategoryController@show');
Route::put('/categories/{category}', 'CategoryController@update');
Route::delete('/categories/{category}', 'CategoryController@destroy');


Route::get('/wants', 'WantController@category');
