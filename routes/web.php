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

Route::get('/', 'QuestionController@index');

Route::get('test', 'AnswerController@index');

Route::prefix('question')->group(function () {
    Route::get('/', 'QuestionController@index');
    Route::get('all', 'QuestionController@index');
    Route::get('add', 'QuestionController@create')->name('add_question');
    Route::post('store', 'QuestionController@store')->name('store_question');
    Route::get('view/{question}', 'QuestionController@show')->name('view_question');
});

Route::prefix('answer')->group(function () {
    Route::post('store', 'AnswerController@store')->name('store_answer');
});


Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
