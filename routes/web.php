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
    return view('question');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/questions', 'QuestionController@index');

Route::get('/submit', 'QuestionController@index');
