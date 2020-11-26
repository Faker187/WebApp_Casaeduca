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
Route::get('/', 'InicioController@inicio');
Route::get('/Curso/{id}', 'InicioController@detalleCurso');
Route::get('/Casaeduca', 'InicioController@caseduca');
Route::get('/Contacto', 'InicioController@contacto');
Route::post('/formularioContacto', 'InicioController@formularioContacto');
Route::get('/Revista', 'InicioController@revista');
Route::get('/DetalleRevista/{id}', 'InicioController@detalleRevista');
Route::get('/Planacademico', 'InicioController@planacademico');

Route::get('/verificarAlumnos', 'AlumnoController@verificarAlumnos');

Route::get('/Cursos', function () {
    return view('cursos');
});

Auth::routes();

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

Route::get('/adminRevista', 'AdminController@adminRevista')->name('adminRevista');
Route::post('/agregarRevista', 'AdminController@agregarRevista')->name('agregarRevista');
Route::get('/buscarRevista', 'AdminController@buscarRevista')->name('buscarRevista');
Route::post('/editarRevista', 'AdminController@editarRevista')->name('editarRevista');
Route::get('/eliminarRevista', 'AdminController@eliminarRevista')->name('eliminarRevista');

Route::get('/adminCorreos', 'AdminController@adminCorreos')->name('adminCorreos');

Route::get('/planes/{idCurso}', 'AdminController@adminPlanes')->name('adminPlanes');
Route::post('/agregarPlan', 'AdminController@agregarPlan')->name('agregarPlan');
Route::get('/buscarPlan', 'AdminController@buscarPlan')->name('buscarPlan');
Route::post('/editarPlan', 'AdminController@editarPlan')->name('editarPlan');
// Route::get('/eliminarPlan', 'AdminController@eliminarPlan')->name('eliminarPlan');
Route::get('/cambiarEstadoPlan', 'AdminController@cambiarEstadoPlan')->name('cambiarEstadoPlan');


Route::get('/selectUnidadesAjax', 'AdminController@selectUnidades');
Route::get('/selectUnidadesDocAjax', 'AdminController@selectUnidadesDoc');
Route::get('/selectClasesAjax', 'AdminController@selectClases');

//Suscripcion
Route::get('/suscribete', 'SuscripcionController@suscribirse')->name('suscribete'); //Pantalla Suscripción
Route::get('/AgregarAlumno', 'SuscripcionController@agregarAlumno')->name('agregarAlumno');
Route::get('/obtenerPlanes/{idCurso}', 'SuscripcionController@obtenerPlanes')->name('obtenerPlanes');
Route::get('/verificarEmail', 'InicioController@verificarEmail')->name('verificarEmail');
// Route::post('/renovarSuscripcion' , 'SuscripcionController@renovarSuscripción');

Route::post('/crearSuscripcion' , 'SuscripcionController@crearSuscripcion'); //Crea cuenta inactiva
Route::get('/pagarPlan', 'SuscripcionController@pagarPlan')->name('pagarPlan'); //Pantalla comenzar pago
Route::post('/procesarPago', 'SuscripcionController@procesarPago')->name('procesarPago');
Route::post('/procesarRenovacion', 'SuscripcionController@procesarRenovacion')->name('procesarRenovacion');
Route::post('/finalizarPago', 'SuscripcionController@finalizarPago')->name('finalizarPago');
Route::post('/renovarPlanPago', 'SuscripcionController@renovarPlanPago')->name('renovarPlanPago');
Route::post('/activarCuenta', 'SuscripcionController@activarCuenta')->name('activarCuenta');
Route::post('/volver', 'SuscripcionController@volver')->name('volver');

//Asignatura
Route::get('/Asignatura/{id}', 'AsignaturaController@asignatura2');
Route::get('/Test/{id}', 'AsignaturaController@asignatura2');
//Clase
Route::get('/CargarClase/{idClase}', 'ClaseController@clase');

//Alumno
Route::get('/Apoderado', 'AlumnoController@apoderado')->name('apoderado');
// Route::get('/Alumno', 'AlumnoController@alumno')->name('alumno');
Route::get('/Alumno/{id}', 'AlumnoController@portalAlumno');
Route::get('/ContactarProfesor', 'AlumnoController@contactarProfesor')->name('contactarProfesor');
Route::get('/responderCorreo/{id}/{token}', 'InicioController@responderCorreo')->name('responderCorreo');
Route::post('/ResponderCorreo', 'InicioController@enviarRespuestaProfesor')->name('enviarRespuestaProfesor');

Route::get('/BuscarCorreos','InicioController@buscarCorreos')->name('buscarCorreos');

Route::get('/planesRenovar/{id}','AlumnoController@renovarPlan');

Route::post('/CambiarNombreAlumno', 'AlumnoController@cambiarNombreAlumno')->name('cambiarNombreAlumno');
Route::post('/EnviarCorreo', 'AlumnoController@enviarCorreo')->name('enviarCorreo');

Route::get('/RegistrarClaseSesion','AsignaturaController@registrarClaseSesion');

//Modificar Sitio web
Route::get('/ModificarSitioWeb', 'AdminController@modificarSitioWeb')->name('modificarSitioWeb');
Route::get('/buscarParametro', 'AdminController@buscarParametro')->name('buscarParametro');
Route::post('/editarParametro', 'AdminController@editarParametro')->name('editarParametro');