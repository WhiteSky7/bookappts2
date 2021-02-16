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

Route::get('/book', 'App\Http\Controllers\BookController@index');
Route::get('/book/index', 'App\Http\Controllers\BookController@index');
Route::get('/book/list', 'App\Http\Controllers\BookController@index');
Route::get('/book/form', 'App\Http\Controllers\BookController@index');
Route::get('/book/edit/{num}', 'App\Http\Controllers\BookController@index');

Route::get('/lib', 'App\Http\Controllers\LibController@index');
Route::get('/lib/index', 'App\Http\Controllers\LibController@index');
Route::get('/lib/list', 'App\Http\Controllers\LibController@index');
Route::get('/lib/form', 'App\Http\Controllers\LibController@index');
Route::get('/lib/edit/{num}', 'App\Http\Controllers\LibController@index');



Route::view('/{all?}', 'app')
    ->where(['all' => '.*']);
