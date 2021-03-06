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
Route::post('/books', 'BookController@store' ); // Create book root
Route::post('/books/{id}', 'BookController@update'); //Update book root
Route::delete('/books/{id}', 'BookController@delete');
Route::resource('book','BookController');

Route::get('/libs', 'LibController@index');
Route::get('/libs/{id}', 'LibController@show');
Route::post('/libs', 'LibController@store');
Route::post('/libs/{id}', 'LibController@update');
Route::delete('/libs/{id}', 'LibController@delete');



