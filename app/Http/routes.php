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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'WelcomeController@login');

Route::post('/login', 'WelcomeController@check');

Route::get('/regist', 'WelcomeController@index');

Route::get('/dashboard', 'WelcomeController@dashboard');

Route::get('/history', 'WelcomeController@history');

Route::post('/test', function(){
	return view('test.head', ['name' => 'Tom']);
});
