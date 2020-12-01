<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin','middleware'=>'adminLogin'], function () {
    Route::get('/', 'AdminController@index')->name('admin');

    Route::resource('user', 'UserController');
    Route::resource('category', 'CategoryController');
    Route::resource('product', 'ProductController');
    Route::resource('topic', 'TopicController');
    Route::resource('lesson', 'LessonController');
    Route::resource('question', 'QuestionController');
    Route::resource('post', 'PostController');
});


//route site
Route::group(['prefix' => 'site'], function () {
    Route::get('topic', 'TopicController@topicPage')->name('site.topic');
    Route::get('lesson/{id}', 'LessonController@lessonPage')->name('site.lesson');
    Route::get('post', 'PostController@postPage')->name('site.post');
    Route::get('lesson/content/{id}', 'LessonController@lessonShowPage')->name('site.lesson.content');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});