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
Route::get('/', 'HomeController@index')->name('home');

Route::get('/view', 'SubjectController@index2');

Route::get('/subjectsaya', 'PivotController@index2');

Route::get('/form', 'SubjectController@index');

Route::get('/form2', 'LearningController@index');
Route::get('/pilih', 'PivotController@index');

Route::post('form','SubjectController@store')->name('subject.create');

Route::post('pilihAction','PivotController@store');

Route::resource('subject', 'SubjectController');
Route::get('subject/{id}/destroy', 'SubjectController@destroy')->name('subject.delete');

Route::resource('learning', 'LearningController');
Route::get('learning/{id}/destroy', 'LearningController@destroy')->name('learning.delete');
