<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/home', 'HomeController@index')->name('home');

//Rutas para la tabla citas en frontend
route::get('/Citas/create', 'CitasController@create')->name('citas.create');
route::post('/Citas/store', 'CitasController@store')->name('citas.store');




//admin*****-----------********

Route::get('admin/home', function(){
        return view ('admin.home');
});

//tabla programas
route::get('admin/programas/index', 'ProgramaController@index')->name('admin.programas.index')->middleware('auth');
route::get('admin/programas/create', 'ProgramaController@create')->name('admin.programas.create')->middleware('auth');
route::post('admin/programas/store', 'ProgramaController@store')->name('admin.programas.store')->middleware('auth');
route::get('admin/programas/edit/{Id}', 'ProgramaController@edit')->name('admin.programas.edit')->middleware('auth');
route::post('admin/programas/update/{Id}', 'ProgramaController@update')->name('admin.programas.update')->middleware('auth');
route::get('admin/programas/destroy/{Id}', 'ProgramaController@destroy')->name('admin.programas.destroy')->middleware('auth');

//tabla aprendices
route::get('admin/aprendices/index', 'AprendicesController@index')->name('admin.aprendices.index')->middleware('auth');
route::get('admin/aprendices/create', 'AprendicesController@create')->name('admin.aprendices.create')->middleware('auth');
route::post('admin/aprendices/store', 'AprendicesController@store')->name('admin.aprendices.store')->middleware('auth');
route::get('admin/aprendices/edit/{Id}', 'AprendicesController@edit')->name('admin.aprendices.edit')->middleware('auth');
route::post('admin/aprendices/update/{Id}', 'AprendicesController@update')->name('admin.aprendices.update')->middleware('auth');
route::get('admin/aprendices/destroy/{Id}', 'AprendicesController@destroy')->name('admin.aprendices.destroy')->middleware('auth');

//tabla instructores
route::get('admin/instructores/index', 'InstructoresController@index')->name('admin.instructores.index')->middleware('auth');
route::get('admin/instructores/create', 'InstructoresController@create')->name('admin.instructores.create')->middleware('auth');
route::post('admin/instructores/store', 'InstructoresController@store')->name('admin.instructores.store')->middleware('auth');
route::get('admin/instructores/edit/{Id}', 'InstructoresController@edit')->name('admin.instructores.edit')->middleware('auth');
route::post('admin/instructores/update/{Id}', 'InstructoresController@update')->name('admin.instructores.update')->middleware('auth');
route::get('admin/instructores/destroy/{Id}', 'InstructoresController@destroy')->name('admin.instructores.destroy')->middleware('auth');

//tabla seguimientos
route::get('admin/seguimientos/index', 'SeguimientosController@index')->name('admin.seguimientos.index')->middleware('auth');
route::get('admin/seguimientos/create', 'SeguimientosController@create')->name('admin.seguimientos.create')->middleware('auth');
route::post('admin/seguimientos/store', 'SeguimientosController@store')->name('admin.seguimientos.store')->middleware('auth');
route::get('admin/seguimientos/edit/{Id}', 'SeguimientosController@edit')->name('admin.seguimientos.edit')->middleware('auth');
route::post('admin/seguimientos/update/{Id}', 'SeguimientosController@update')->name('admin.seguimientos.update')->middleware('auth');
route::get('admin/seguimientos/destroy/{Id}', 'SeguimientosController@destroy')->name('admin.seguimientos.destroy')->middleware('auth');

//tabla citas
route::get('admin/Citas/index', 'CitasAdminController@index')->name('admin.citas.index')->middleware('auth');
route::get('admin/Citas/edit/{id}', 'CitasAdminController@edit')->name('admin.citas.edit')->middleware('auth');
route::post('admin/Citas/update/{id}', 'CitasAdminController@update')->name('admin.citas.update')->middleware('auth');
route::get('admin/Citas/destroy/{id}', 'CitasAdminController@destroy')->name('admin.citas.destroy')->middleware('auth');

//tabla actividades
route::get('admin/actividad/index', 'ActividadesController@index')->name('admin.actividad.index')->middleware('auth');
route::get('admin/actividad/create', 'ActividadesController@create')->name('admin.actividad.create')->middleware('auth');
route::post('admin/actividad/store', 'ActividadesController@store')->name('admin.actividad.store')->middleware('auth');
route::get('admin/actividad/edit/{Id}', 'ActividadesController@edit')->name('admin.actividad.edit')->middleware('auth');
route::post('admin/actividad/update/{Id}', 'ActividadesController@update')->name('admin.actividad.update')->middleware('auth');
route::get('admin/actividad/destroy/{Id}', 'ActividadesController@destroy')->name('admin.actividad.destroy')->middleware('auth');

//tabla asistencia
route::get('admin/asistencia/index', 'AsistenciasController@index')->name('admin.asistencia.index')->middleware('auth');
route::get('admin/asistencia/create', 'AsistenciasController@create')->name('admin.asistencia.create')->middleware('auth');
route::post('admin/asistencia/store', 'AsistenciasController@store')->name('admin.asistencia.store')->middleware('auth');
route::get('admin/asistencia/edit/{Id}', 'AsistenciasController@edit')->name('admin.asistencia.edit')->middleware('auth');
route::post('admin/asistencia/update/{Id}', 'AsistenciasController@update')->name('admin.asistencia.update')->middleware('auth');
route::get('admin/asistencia/destroy/{Id}', 'AsistenciasController@destroy')->name('admin.asistencia.destroy')->middleware('auth');