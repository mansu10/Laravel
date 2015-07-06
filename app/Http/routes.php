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

// Route::get('/', 'WelcomeController@index');

Route::get('/', 'Auth\AuthController@getLogin');
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Route::get('auth/login', 'Auth\AuthController@getLogin');
// Route::post('auth/login', 'Auth\AuthController@postLogin');
// Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Route::get('login', ['middleware' => 'guest', 'as' => 'login', 'uses' => 'loginController@getLogin']);
// Route::get('login', ['middleware' => 'guest', 'uses' => 'loginController@postLogin']);
// Route::get('logout', ['middleware' => 'auth', 'as' => 'logout', 'uses' => 'loginController@logout']);

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function(){
	Route::get('/', 'AdminHomeController@index');
	Route::get('devices/detail/{uid}', 'DeviceController@show');
	Route::resource('devices', 'DeviceController');
	
});