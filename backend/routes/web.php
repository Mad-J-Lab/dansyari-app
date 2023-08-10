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

// web.phpはデフォルトでセッションによる認証を通るように設定されている（api.phpはされていない）
// ユーザーの認証が通っていなければ認可は通らない
// パラメータを使用するもの以外では認可が必要ないことが多い
Route::prefix('api')->group(function() {
    Route::delete('/items/{item}', 'ItemController@destroy')
    ->middleware('can:userItem,item');
    Route::get('/categories/disuse/{category}', 'ItemController@disuseItems')
    ->middleware('can:userCategory,category');
});

Route::prefix('api')->group(function() {
    Route::get('/categories', 'CategoryController@index');
    Route::post('/categories', 'CategoryController@store');

});

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');
