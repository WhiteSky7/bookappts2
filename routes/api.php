<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/books', 'BookController@index');
Route::get('/books/{id}', 'BookController@show');
Route::post('/books', 'BookController@store');
Route::post('/books/{id}/answers', 'BookController@answer');
Route::delete('/books/{id}', 'BookController@delete');
Route::delete('/books/{id}/answers', 'BookController@resetAnswers');

Route::get('/libs', 'LibController@index');
Route::get('/libs/{id}', 'LibController@show');
Route::post('/libs', 'LibController@store');
Route::post('/libs/{id}/answers', 'LibController@answer');
Route::delete('/libs/{id}', 'LibController@delete');
Route::delete('/libs/{id}/answers', 'LibController@resetAnswers');



