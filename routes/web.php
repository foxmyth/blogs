<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return "welcome phpgirls!";
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('logout', 'HomeController@logout');

Route::group(['namespace' => 'Admin'], function() {
	Route::group(['prefix' => 'profile'], function() {
		Route::get('/', 'UserController@showProfile');
	});	
});