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

//App
Route::get('/','AppController@form');
Route::get('/lista', 'AppController@lista');

//Api
Route::post('/api', 'ApiController@consulta');
Route::get('/api/resposta/{id}','ApiController@resposta');
Route::get('/api/excluir/{id}','ApiController@excluir');

//test
Route::get('test', function(){
	return phpinfo();
});
//Autenticação
Route::get('/login', 'LoginController@login');

Route::post('auth/register', 'Auth\AuthController@create');

Route::controllers([
'auth' => 'Auth\AuthController',
'password' => 'Auth\PasswordController',
]);
