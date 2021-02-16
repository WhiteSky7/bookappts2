<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/books', 'BookController@index');
Route::get('/books/{id}', 'BookController@show');
Route::post('/books', 'BookController@store');
Route::post('/books/{id}/answers', 'BookController@answer');
Route::delete('/books/{id}', 'BookController@delete');
Route::delete('/books/{id}/answers', 'BookController@resetAnswers');

Route::get('/libs', 'libController@index');
Route::get('/libs/{id}', 'libController@show');
Route::post('/libs', 'libController@store');
Route::post('/libs/{id}/answers', 'libController@answer');
Route::delete('/libs/{id}', 'libController@delete');
Route::delete('/libs/{id}/answers', 'libController@resetAnswers');



Route::view('/{all?}', 'app')
    ->where(['all' => '.*']);
