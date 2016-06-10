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

//form
Route::get('/','AppController@form');

//Api
Route::post('/api', 'ApiController@consulta');
Route::get('test', function(){
	return phpinfo();
});
//Autenticação
Route::get('home', 'HomeController@index');

Route::post('auth/register', 'Auth\AuthController@create');

Route::controllers([
'auth' => 'Auth\AuthController',
'password' => 'Auth\PasswordController',
]);
