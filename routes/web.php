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
Route::get('/logout', 'HomeController@logout');

Route::group(['namespace' => 'Admin'], function() {
	//profile
	Route::group(['prefix' => 'profile'], function() {

		Route::get('/', 'UserController@showProfile');
		Route::match(['put', 'post'], '/{id}', 'UserController@update');
	});	
	//members
	Route::group(['prefix' => 'members'], function() {
		Route::get('/', 'UserController@index');
		Route::get('/create', 'UserController@create');
		Route::get('/{id}', 'UserController@edit');
	});
});

// password reset 
Route::group(['prefix' => 'password'], function() {
	Route::get('/reset/{token?}', 'Auth\PasswordController@showResetForm');
	Route::post('/reset', 'Auth\PasswordController@reset');
	Route::post('/email', 'Auth\PasswordController@sendResetLinkEmail');

});

// preview image
Route::get('profiles/{image}', function($image) {
	$path = storage_path().'/app/profiles/'.$image;
	
	$file = Storage::get('profiles/'.$image);
	$mimetype = Storage::mimeType('profiles/'.$image);

	return response($file, 200)->header('Content-Type', $mimetype);
});