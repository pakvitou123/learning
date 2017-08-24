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

Auth::routes();

//Route::get('/home', 'LearningController@index')->name('index');
Route::get('index','LearningController@index')->name('index');
Route::get('test','LearningController@test');
Route::post('tocreate', 'LearningController@createGroup')->name('createWorkspace');
Route::get('group','LearningController@group')->name('group');
Route::get('index_group','LearningController@indexGroup')->name('index-group');
Route::get('formedit','learningController@showedit')->name('formedit');

Route::get('create/question','LearningController@add');
Route::any('created','learningController@created');

//Route for new template forum

Route::get('home', 'learningController@home');
Route::post('user-profile','learningController@updateProfile');


//Route::get('/home', 'HomeController@index')->name('home');
