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

Route::get('/home', 'HomeController@index')->name('home');

//Cuenta
Route::get('/verificarCuenta', 'HomeController@verificarCuenta')->name('verificarCuenta');

//Admin
Route::get('/Administrador', 'AdminController@admin')->name('admin');
Route::get('/Profesores', 'AdminController@profesores')->name('adminProfesores');
Route::get('/adminAsignaturas/{idCurso}', 'AdminController@adminAsignaturas')->name('adminAsignaturas');
Route::get('/adminUnidades/{idCurso}', 'AdminController@adminUnidades')->name('adminUnidades');
Route::get('/adminClases/{idCurso}', 'AdminController@adminClases')->name('adminClases');

//Suscripcion
Route::get('/suscribete', 'SuscripcionController@suscribirse')->name('suscribete'); //Pantalla Suscripción
Route::post('/renovarSuscripcion' , 'SuscripcionController@renovarSuscripción');
Route::post('/crearSuscipcion' , 'SuscripcionController@crearSuscipcion'); //Crea cuenta inactiva
Route::get('/pagarPlan', 'SuscripcionController@pagarPlan')->name('pagarPlan'); //Pantalla comenzar pago
Route::post('/finalizarPago', 'SuscripcionController@finalizarPago')->name('finalizarPago');
Route::post('/activarCuenta', 'SuscripcionController@activarCuenta')->name('activarCuenta');

//Asignatura
Route::get('/Asignatura/{id}', 'AsignaturaController@asignatura');

//Clase
Route::get('/CargarClase/{idClase}', 'ClaseController@clase');

//Alumno
Route::get('/Alumno', 'AlumnoController@alumno')->name('alumno');