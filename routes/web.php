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

Route::get('/books', "BookController@index");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/public', 'PublicController@index');

Route::get('/private', 'PrivateController@index');

Route::get('/books/create', "BookController@create");

Route::post('/books', "BookController@store");

Route::get('/books/edit/{id}', "BookController@edit");

Route::post('/books/update/{id}', "BookController@update");

Route::get('/books/delete', "BookController@delete");

Route::get('/books/show', "BookController@show");
