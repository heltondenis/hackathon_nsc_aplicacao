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
    return view('welcome');
});

Route::get('/questions', 'QuestionController@index');

Route::get('/submit', 'QuestionController@save');

Route::get('/event/add', 'EventController@save');

Route::get('/event', 'EventController@get');

Route::get('/event/add/question', 'EventController@addQuestion');
