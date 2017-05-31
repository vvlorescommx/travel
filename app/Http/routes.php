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

Route::get('/', 'HomeController@index');

Route::auth();
Route::get('/login', function () {
    return view('login');
});

Route::get('/layout/cabecera', function () {
    return view('layout/cabecera');
});


Route::auth();
Route::get('/logout', 'Auth\LoginController@logout');


Route::get('/layout/pie', function () {
    return view('layout/pie');
});

Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/autorizaciones/solicitud', 'AutorizacionesController@SolicitudViaje');
Route::get('/autorizaciones/creacionpsv', 'AutorizacionesController@CreacionPSV');
Route::post('/autorizaciones/guardarproyecto', 'AutorizacionesController@guardarProyecto');






