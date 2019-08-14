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

$coord_actualizaciones = [
    'index' => 'coordinacion.actualizaciones.index',
    'create' => 'coordinacion.actualizaciones.create',
    'store' => 'coordinacion.actualizaciones.store',
    'edit' => 'coordinacion.actualizaciones.edit',
    'update' => 'coordinacion.actualizaciones.update',
    'show' => 'coordinacion.actualizaciones.show',
    'destroy' => 'coordinacion.actualizaciones.destroy'
];

$coord_observacion = [
    'index' => 'coordinacion.observacion.index',
    'create' => 'coordinacion.observacion.create',
    'store' => 'coordinacion.observacion.store',
    'edit' => 'coordinacion.observacion.edit',
    'update' => 'coordinacion.observacion.update',
    'show' => 'coordinacion.observacion.show',
    'destroy' => 'coordinacion.observacion.destroy'
];

$coord_ajustes= [
    'index' => 'coordinacion.ajustes.index',
    'create' => 'coordinacion.ajustes.create',
    'store' => 'coordinacion.ajustes.store',
    'edit' => 'coordinacion.ajustes.edit',
    'update' => 'coordinacion.ajustes.update',
    'show' => 'coordinacion.ajustes.show',
    'destroy' => 'coordinacion.ajustes.destroy'
];

Route::get('/', function () {
    return view('login');
});

Route::post('/configurarPassword', 'Auth\RegisterController@configurarPassword')->name('configurarPassword');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('coordinacion', function(){return view('coordinacion.index');})->name('coordinacion');
Route::resource('coordinacion/actualizaciones', 'coordinacion\actualizacionesController')->names($coord_actualizaciones);
Route::resource('coordinacion/observacion', 'coordinacion\observacionController')->names($coord_observacion);
Route::get('coordinacion/ajustes', 'coordinacion\ajustesController@index')->name('coordinacion.ajustes.index');
Route::post('coordinacion/ajustes/agregarPeriodo', 'coordinacion\ajustesController@agregarPeriodo')
    ->name('coordinacion.ajustes.agregarPeriodo');
Route::post('coordinacion/ajustes/establecerPeriodoVigente', 'coordinacion\ajustesController@establecerPeriodoVigente')
    ->name('coordinacion.ajustes.establecerPeriodoVigente');
Route::post('coordinacion/ajustes/altaDocentesActivos', 'coordinacion\ajustesController@altaDocentesActivos')
    ->name('coordinacion.ajustes.altaDocentesActivos');
Route::resource('actualizaciones', 'actualizacionesController');
Route::resource('observacion', 'observacionController');

Route::get('md5', function(){
    echo md5("coordinacion");
});