<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function(){
    
    Route::get('/home', 'AppointmentsController@index')->name('home');
    Route::get('inicio', 'AppointmentsController@index');
    Route::get('agendar', 'AppointmentsController@agendar');
    Route::post('store', 'AppointmentsController@store');
    Route::get('editar/{id}', 'AppointmentsController@editar');
    Route::post('update', 'AppointmentsController@update');
    Route::get('eliminar/{id}', 'AppointmentsController@destroy');
    Route::get('historial', 'AppointmentsController@historial');
    Route::get('fechas', 'AppointmentsController@fechas');
    Route::post('historial_fecha', 'AppointmentsController@historial_fecha');

});