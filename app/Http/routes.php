<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','diccontroller@index');

Route::post('/','diccontroller@search');

Route::get('search/{id}','diccontroller@show');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('home','diccontroller@index');
Route::get('add/{id}','diccontroller@fav');

Route::get('favorit','diccontroller@favorit');
Route::get('delete/{id}','diccontroller@delete');
Route::post('favorit','diccontroller@addnewfav');