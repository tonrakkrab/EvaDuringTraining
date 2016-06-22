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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('user', 'UserController@index');
Route::get('usersummarize', 'UserController@summarize');
Route::get('userinsert', 'UserController@insert');

Route::get('form', 'FormController@index');
Route::get('formsummarize', 'FormController@summarize');
Route::get('forminsert', 'FormController@insert');

