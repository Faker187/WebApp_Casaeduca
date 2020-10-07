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
    if (Auth::user() == null) {
        return view('welcome');
    }else{

        if (Auth::user()->tipo == 0) {
            return redirect()->route('admin');
        }else{
            return redirect()->route('alumno');
        }
      

    }
    
});

/* Route::get('/', function () {
    return view('sitiocontruccion');    
}); */

Route::get('/Cursos', function () {
    return view('cursos');
});
Route::get('/Curso', function () {
    return view('curso');
});
Route::get('/Casaeduca', function () {
    return view('casaeduca');
});
Route::get('/Blog', function () {
    return view('blog');
});
Route::get('/Noticias', function () {
    return view('blogv');
});
Route::get('/Planacademico', function () {
    return view('planacademico');
});
Route::get('/Contacto', function () {
    return view('contacto');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Cuenta
Route::get('/verificarCuenta', 'HomeController@verificarCuenta')->name('verificarCuenta');

//--------------ADMIN

Route::get('/Administrador', 'AdminController@admin')->name('admin');
Route::get('/Alumnos', 'AdminController@alumnos')->name('alumnos');

Route::get('/Profesores', 'AdminController@profesores')->name('adminProfesores');
Route::post('/agregarProfesor', 'AdminController@agregarProfesor')->name('agregarProfesor');
Route::get('/buscarProfesor', 'AdminController@buscarProfesor')->name('buscarProfesor');
Route::post('/editarProfesor', 'AdminController@editarProfesor')->name('editarProfesor');
Route::get('/eliminarProfesor', 'AdminController@eliminarProfesor')->name('eliminarProfesor');

Route::get('/Pagos', 'AdminController@pagos')->name('adminPagos');

Route::get('/adminAsignaturas/{idCurso}', 'AdminController@adminAsignaturas')->name('adminAsignaturas');
Route::post('/agregarAsignatura', 'AdminController@agregarAsignatura')->name('agregarAsignatura');
Route::get('/buscarAsignatura', 'AdminController@buscarAsignatura')->name('buscarAsignatura');
Route::post('/editarAsignatura', 'AdminController@editarAsignatura')->name('editarAsignatura');
Route::get('/eliminarAsignatura', 'AdminController@eliminarAsignatura')->name('eliminarAsignatura');

Route::get('/adminUnidades/{idCurso}', 'AdminController@adminUnidades')->name('adminUnidades');
Route::post('/agregarUnidad', 'AdminController@agregarUnidad')->name('agregarUnidad');
Route::get('/buscarUnidad', 'AdminController@buscarUnidad')->name('buscarUnidad');
Route::post('/editarUnidad', 'AdminController@editarUnidad')->name('editarUnidad');
Route::get('/eliminarUnidad', 'AdminController@eliminarUnidad')->name('eliminarUnidad');

Route::get('/adminClases/{idCurso}', 'AdminController@adminClases')->name('adminClases');
Route::post('/agregarClase', 'AdminController@agregarClase')->name('agregarClase');
Route::get('/buscarClase', 'AdminController@buscarClase')->name('buscarClase');
Route::post('/editarClase', 'AdminController@editarClase')->name('editarClase');
Route::get('/eliminarClase', 'AdminController@eliminarClase')->name('eliminarClase');

Route::get('/adminDocumentos/{idCurso}', 'AdminController@adminDocumentos')->name('adminDocumentos');
Route::post('/agregarDocumento', 'AdminController@agregarDocumento')->name('agregarDocumento');
Route::get('/buscarDocumento', 'AdminController@buscarDocumento')->name('buscarDocumento');
Route::post('/editarDocumento', 'AdminController@editarDocumento')->name('editarDocumento');
Route::get('/eliminarDocumento', 'AdminController@eliminarDocumento')->name('eliminarDocumento');













Route::get('/selectUnidadesAjax', 'AdminController@selectUnidades');
Route::get('/selectUnidadesDocAjax', 'AdminController@selectUnidadesDoc');
Route::get('/selectClasesAjax', 'AdminController@selectClases');










//Suscripcion
Route::get('/suscribete', 'SuscripcionController@suscribirse')->name('suscribete'); //Pantalla Suscripción
Route::post('/renovarSuscripcion' , 'SuscripcionController@renovarSuscripción');
Route::post('/crearSuscipcion' , 'SuscripcionController@crearSuscipcion'); //Crea cuenta inactiva
Route::get('/pagarPlan', 'SuscripcionController@pagarPlan')->name('pagarPlan'); //Pantalla comenzar pago
Route::post('/procesarPago', 'SuscripcionController@procesarPago')->name('procesarPago');
Route::post('/finalizarPago', 'SuscripcionController@finalizarPago')->name('finalizarPago');
Route::post('/activarCuenta', 'SuscripcionController@activarCuenta')->name('activarCuenta');

//Asignatura
Route::get('/Asignatura/{id}', 'AsignaturaController@asignatura');

//Clase
Route::get('/CargarClase/{idClase}', 'ClaseController@clase');



//--------------FIN ADMIN


//-------------BIBLIOTECA



//Alumno
Route::get('/Alumno', 'AlumnoController@alumno')->name('alumno');