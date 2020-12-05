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
    Route::resource('topic', 'TopicController');
    Route::resource('lesson', 'LessonController');
    Route::resource('question', 'QuestionController');
    Route::resource('post', 'PostController');
});


//route site
Route::group(['prefix' => 'site'], function () {
    Route::get('topic', 'TopicController@topicPage')->name('site.topic');
    Route::get('topic/{id}', 'TopicController@topicDetail')->name('site.topic-detail');
    Route::get('lesson/{id}', 'LessonController@lessonPage')->name('site.lesson');
    Route::get('question/{id}', 'QuestionController@getQuestion')->name('site.get-question');
    Route::post('quizz', 'QuizController@quizz')->name('site.quizz');
    // Route::get('lesson/{id}', 'LessonController@showLesson')->name('site.show-lesson');
    Route::post('dangkyhoc', 'DangKyHocController@dangKy')->name('site.dang-ky-hoc');
    Route::get('user/{id}', 'UserController@userDetail')->name('site.thong-tin-user');
    Route::get('lich-su-hoc', 'UserController@lichSuHoc')->name('site.lich-su-hoc');
    Route::get('post', 'PostController@postPage')->name('site.posts');
    Route::get('post/{id}', 'PostController@show')->name('site.post');
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});