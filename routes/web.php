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

Route::get('/home', 'LearningController@index')->name('index');
Route::get('index','LearningController@index')->name('index');
Route::get('test','LearningController@test');
Route::post('tocreate', 'LearningController@createGroup')->name('createWorkspace');
Route::get('group','LearningController@group')->name('group');
Route::get('formedit','learningController@showedit')->name('formedit');