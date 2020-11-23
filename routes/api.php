<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('category', 'Api\CategoryController@index')->name('category.index');

Route::get('category/{category}', 'Api\CategoryController@show')->name('category.show');

Route::put('category/{category}', 'Api\CategoryController@update')->name('category.update');

Route::patch('category/{category}', 'Api\CategoryController@update')->name('category.update');

Route::delete('category/{category}', 'Api\CategoryController@destroy')->name('category.destroy');