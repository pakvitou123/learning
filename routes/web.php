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

Route::get('/home', 'LearningController@data')->name('data');

Route::get('test','LearningController@test');
Route::post('tocreate', 'LearningController@createGroup')->name('createWorkspace');
Route::get('group','LearningController@group')->name('group');
Route::get('formedit','learningController@showedit')->name('formedit');
Route::get('tocreate', 'LearningController@createGroup')->name('createWorkspace');

//tou tou below


Route::group(['middleware'=>'auth'],function(){

    Route::get('/data','learningController@data');
    Route::get('/create/question','LearningController@create');
    Route::any('/created','learningController@created');
    Route::post('/search','LearningController@search');
//    Route::get('/profile','LearningController@avatar_profile');
//    Route::post('/profile','LearningController@update_avatar');

});
