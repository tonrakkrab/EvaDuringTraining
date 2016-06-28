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
Route::get('formselectall', 'FormController@selectAll');
Route::get('formconclude', 'FormController@conclude');
Route::get('forminsert', 'FormController@insert');
Route::get('formupdate/{id}/{cousecode}', ['uses' =>'FormController@update']);
Route::get('formdeleteall', 'FormController@deleteAll');
Route::get('formdelete/{id}', ['uses' =>'FormController@delete']);

Route::get('pagedur_tra_sum', 'LinkController@form_dur_tra_sum');
Route::get('pagedur_tra_index', 'LinkController@form_dur_tra_index');

Route::post('form/dur_train','FormController@store');
