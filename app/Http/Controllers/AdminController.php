<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Pago;
use \App\Asignatura;
use \App\Unidad;
use \App\Clase;
use \App\Documento;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('tipoAdministrador');
    }

    public function admin()
    {
        $alumnosActivos   = User::where('estado',1)->count();
        $alumnosInactivos = User::where('estado',0)->count();
        return view('Administrador.dashboard', compact('alumnosActivos','alumnosInactivos'));
    }

    //Listar Alumnos pantalla ADMIN
    public function alumnos()
    {
        $alumnos = User::all()->where('tipo' , 1);
        return view('Administrador.alumnosAdmin',compact('alumnos'));
    }

    public function profesores()
    {
        $profesores = User::all()->where('tipo' , 2);
        return view('Administrador.profesoresAdmin',compact('profesores'));
    }

    public function agregarProfesor(Request $request)
    {
        $profesor = new User;

        $profesor->name = $request->nombre;
        $profesor->name_apoderado = $request->nombre;
        $profesor->email = $request->email;
        $profesor->genero = 0;
        $profesor->tipo = 2;
        $profesor->save();

        $data = Array();
        $data['nombre'] = $request->nombre;
        $data['email'] = $request->email;
        $data['id'] = $profesor->id;
        return $data;
    }

    public function buscarProfesor(Request $request)
    {
        $indexTr = $request->indexTr;
        $profesor = User::find($request->idProfesor);
        return view('Administrador.editarProfesor',compact('profesor','indexTr'));
    }

    public function editarProfesor(Request $request)
    {
        $profesor = User::find($request->idProfesor);
        $profesor->name = $request->nombre;
        $profesor->email = $request->email;
        $profesor->save();

        //retorno el request por que viene con todos los datos y ademas el indice de la row
        return $request;
    }

    public function eliminarProfesor(Request $request)
    {
        $profesor = User::find($request->idProfesor);
        $profesor->delete();
        //retorno el request por que viene con todos los datos y ademas el indice de la row
        return $request;
    }   

    public function pagos()
    {
        $pagos = Pago::all();
        return view('Administrador.pagosAdmin',compact('pagos'));

    }

    public function adminAsignaturas($idCurso)
    {
        $asignaturas = \App\Asignatura::all()->where('idcurso' , $idCurso);
        return view('Administrador.asignaturasAdmin',compact('asignaturas'));
    }

    public function agregarAsignatura(Request $request)
    {
        $asignatura = new Asignatura;
        $asignatura->nombre = $request->nombre;
        $asignatura->idcurso = $request->idCurso;
        $asignatura->save();

        $data = Array();
        $data['nombre'] = $request->nombre;
        $data['idCurso'] = $request->idCurso;
        return $data;
    }

    public function buscarAsignatura(Request $request)
    {
        $indexTr = $request->indexTr;
        $asignatura = Asignatura::where('idasignatura',$request->idAsignatura)->first();
        return view('Administrador.editarAsignatura',compact('asignatura','indexTr'));
    }

    public function editarAsignatura(Request $request)
    {

        $asignatura = Asignatura::where('idasignatura',$request->idAsignatura)->first();
        $asignatura->nombre = $request->nombre;
        $asignatura->idcurso = 1;
        $asignatura->save();
        return $asignatura;
        //retorno el request por que viene con todos los datos y ademas el indice de la row
        return $request;
    }

    public function eliminarAsignatura(Request $request)
    {
        $asignatura = Asignatura::find($request->idAsignatura);
        $asignatura->delete();
        //retorno el request por que viene con todos los datos y ademas el indice de la row
        return $request;
    }

    public function adminUnidades($idCurso)
    {
       
        $asignaturas = \App\Asignatura::where('idcurso' , $idCurso)->get();

        $idAsignaturas = Array();
        foreach ($asignaturas as $asignatura) {
            $idAsignaturas[] = $asignatura->idasignatura;
        }

        $unidades = \App\Unidad::whereIn('idasignatura' , $idAsignaturas)->get();

        foreach ($unidades as $unidad) {
            $unidad->nombreAsignatura = \App\Asignatura::where('idasignatura', $unidad->idasignatura)->first()->nombre;
        }
     

        return view('Administrador.unidadesAdmin',compact('unidades','asignaturas'));
    }

    public function agregarUnidad(Request $request)
    {
        $unidad = new Unidad;
        $unidad->nombre = $request->nombre;
        $unidad->idasignatura = $request->asignatura;
        $unidad->save();

        $nombreAsignatura = Asignatura::find($request->asignatura)->nombre;

        $data = Array();
        $data['nombre'] = $request->nombre;
        $data['asignatura'] = $nombreAsignatura;
        return $data;
    }

    public function buscarUnidad(Request $request)
    {   
        $indexTr = $request->indexTr;
        $unidad = Unidad::find($request->idUnidad);
        $idCurso = Asignatura::find($unidad->idasignatura)->idcurso;
        $asignaturas = \App\Asignatura::where('idcurso' , $idCurso)->get();

        return view('Administrador.editarUnidad',compact('unidad','indexTr','asignaturas'));
    }

    public function editarUnidad(Request $request)
    {
        $unidad = Unidad::find($request->idUnidad);
        $unidad->nombre = $request->nombre;
        $unidad->idasignatura = $request->asignatura;
        $unidad->save();

        $nombreAsignatura = Asignatura::find($request->asignatura)->nombre;

        $data = Array();
        $data['nombre'] = $request->nombre;
        $data['asignatura'] = $nombreAsignatura;
        $data['indexTr'] = $request->indexTr;
        return $data;
    }

    public function eliminarUnidad(Request $request)
    {
        $unidad = Unidad::find($request->idUnidad);
        $unidad->delete();
        //retorno el request por que viene con todos los datos y ademas el indice de la row
        return $request;
    }

    public function adminClases($idCurso)
    {
        $asignaturas = \App\Asignatura::where('idcurso' , $idCurso)->get();

        $idAsignaturas = Array();
        foreach ($asignaturas as $asignatura) {
            $idAsignaturas[] = $asignatura->idasignatura;
        }

        $unidades = \App\Unidad::whereIn('idasignatura' , $idAsignaturas)->get();
        $idUnidades = Array();
        foreach ($unidades as $unidad) {
            $idUnidades[] = $unidad->idunidad;
        }
        
        $clases = \App\Clase::whereIn('idunidad' , $idUnidades)->get();

        foreach ($clases as $clase) {
            $unidad = \App\Unidad::where('idunidad' , $clase->idunidad)->first();
            $clase->nombreUnidad = $unidad->nombre;
            $clase->nombreAsignatura = \App\Asignatura::where('idasignatura' , $unidad->idasignatura)->first()->nombre;
        }

        return view('Administrador.clasesAdmin',compact('clases', 'idCurso','unidades','asignaturas'));
    }

    public function agregarClase(Request $request)
    {

        $clase = new Clase;
        $clase->nombre = $request->nombre;
        $clase->idunidad = $request->idUnidad;
        $clase->save();

        $nombreUnidad = Unidad::find($request->idUnidad)->nombre;
        $nombreAsignatura = Asignatura::find($request->idAsignatura)->nombre;

        $data = Array();
        $data['nombre'] = $request->nombre;
        $data['unidad'] = $nombreUnidad;
        $data['asignatura'] = $nombreAsignatura;
        return $data;

    }

    public function buscarClase(Request $request)
    {
        $indexTr = $request->indexTr;
        $clase = Clase::find($request->idClase);
        $unidad = Unidad::find($clase->idunidad);
        $asignatura = Asignatura::find($unidad->idasignatura);

        $asignaturas = Asignatura::where('idcurso', $request->idCurso)->get();
        $unidades = Unidad::where('idasignatura', $asignatura->idasignatura)->get();

        return view('Administrador.editarClase',compact('clase','unidad','asignatura','indexTr','asignaturas','unidades'));
    }

    public function editarClase(Request $request)
    {
        $clase = Clase::find($request->idClase);
        $clase->nombre = $request->nombre;
        $clase->idunidad = $request->idUnidad;
        $clase->save();

        $nombreUnidad = Unidad::find($request->idUnidad)->nombre;
        $nombreAsignatura = Asignatura::find($request->idAsignatura)->nombre;

        $data = Array();
        $data['nombre'] = $request->nombre;
        $data['unidad'] = $nombreUnidad;
        $data['asignatura'] = $nombreAsignatura;
        $data['indexTr'] = $request->indexTr;
        return $data;
    }

    public function eliminarClase(Request $request)
    {
        $clase = Clase::find($request->idClase);
        $clase->delete();
        //retorno el request por que viene con todos los datos y ademas el indice de la row
        return $request;
    }


    public function adminDocumentos(Request $request, $idCurso)
    {
        $asignaturas = \App\Asignatura::where('idcurso' , $idCurso)->get();

        $idAsignaturas = Array();
        foreach ($asignaturas as $asignatura) {
            $idAsignaturas[] = $asignatura->idasignatura;
        }

        $unidades = \App\Unidad::whereIn('idasignatura' , $idAsignaturas)->get();
        $idUnidades = Array();
        foreach ($unidades as $unidad) {
            $idUnidades[] = $unidad->idunidad;
        }

        $clases = \App\Clase::whereIn('idunidad' , $idUnidades)->get();
        $idClases = Array();
        foreach ($clases as $clase ) {
            $idClases[] = $clase->idclase;
        }


        $documentos =  Documento::whereIn('idClase', $idClases)->get();
        foreach ($documentos as $documento) {
            $documento->nombreAsignatura = Asignatura::find($documento->idAsignatura)->nombre;
            $documento->nombreUnidad = Unidad::find($documento->idUnidad)->nombre;
            $documento->nombreClase = Clase::find($documento->idClase)->nombre;
        }
        return view('Administrador.documentosAdmin', compact('documentos', 'asignaturas', 'idCurso'));
    }

    public function agregarDocumento(Request $request)
    {
        //obtenemos el campo file definido en el formulario
        $file = $request->file('documento');

        //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();

        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('local')->put($nombre,  \File::get($file));

        // Agregar Nuevo Documento
        $documento = new Documento;
        $documento->nombre = $request->nombre;
        $documento->documento = $nombre;
        $documento->idAsignatura = $request->idAsignatura;
        $documento->idUnidad = $request->idUnidad;
        $documento->idClase = $request->idClase;
        $documento->save();

        $nombreAsignatura = Asignatura::find($request->idAsignatura)->nombre;
        $nombreUnidad = Unidad::find($request->idUnidad)->nombre;
        $nombreClase = Clase::find($request->idClase)->nombre;
        

        $data = Array();
        $data['nombre'] = $request->nombre;
        $data['documento'] = $nombre;
        $data['asignatura'] = $nombreAsignatura;
        $data['unidad'] = $nombreUnidad;
        $data['clase'] = $nombreClase;
        return $data;
    }

    public function buscarDocumento(Request $request)
    {
        $indexTr = $request->indexTr;
        $idCurso = $request->idCurso;
        $documento = Documento::find($request->idDocumento);
        
        $asignaturas = Asignatura::where('idcurso', $request->idCurso)->get();
        $unidades = Unidad::where('idasignatura', $documento->idAsignatura)->get();
        $clases = Clase::where('idunidad', $documento->idUnidad)->get();

        return view('Administrador.editarDocumento',compact('documento','indexTr','asignaturas','unidades','clases','idCurso'));

    }

    public function editarDocumento(Request $request)
    {
        //obtenemos el campo file definido en el formulario
        $file = $request->file('documento');

        if ($file != null) {
              //TIENE ARCHIVO
            //obtenemos el nombre del archivo
            $nombre = $file->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($nombre,  \File::get($file));
        }

        $documento = Documento::find($request->idDocumento);
        $documento->nombre = $request->nombre;
        if ($file != null) {
            $documento->documento = $nombre;
        }
        $documento->idAsignatura = $request->idAsignatura;
        $documento->idUnidad = $request->idUnidad;
        $documento->idClase = $request->idClase;
        $documento->save();

        $nombreAsignatura = Asignatura::find($request->idAsignatura)->nombre;
        $nombreUnidad = Unidad::find($request->idUnidad)->nombre;
        $nombreClase = Clase::find($request->idClase)->nombre;
        
        $data = Array();
        $data['nombre'] = $request->nombre;
        if ($file != null) {
            $data['documento'] = $nombre;
        }else{
            $data['documento'] = $documento->documento;
        }
        
        $data['asignatura'] = $nombreAsignatura;
        $data['unidad'] = $nombreUnidad;
        $data['clase'] = $nombreClase;
        return $data;
    }

    public function eliminarDocumento(Request $request)
    {
        $documento = Documento::find($request->idDocumento);
        $documento->delete();
        //retorno el request por que viene con todos los datos y ademas el indice de la row
        return $request;
    }



    public function selectUnidades(Request $request)
    {
        $unidades = Unidad::where('idasignatura' , $request->idAsignatura)->get();
        return view('Administrador.selectUnidadesAjax',compact('unidades'));
    }

    public function selectUnidadesDoc(Request $request)
    {
        $unidades = Unidad::where('idasignatura' , $request->idAsignatura)->get();
        return view('Administrador.selectUnidadesDocAjax',compact('unidades'));
    }

    public function selectClases(Request $request)
    {
        $clases = Clase::where('idunidad' , $request->idUnidad)->get();
        return view('Administrador.selectClasesAjax',compact('clases'));
    }

}
