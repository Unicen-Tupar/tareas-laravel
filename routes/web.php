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

Route::get('/', 'TareaController@index');
Route::resource('tarea','TareaController');
Route::resource('category','CategoryController');

Auth::routes();

Route::get('/home', 'TareaController@index');
