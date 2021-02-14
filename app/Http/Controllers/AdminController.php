<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;
use \App\Plan;
use \App\Pago;
use \App\Sitio;
use \App\Alumno;
use \App\Asignatura;
use \App\Revista;
use \App\Unidad;
use \App\Clase;
use \App\Seguimiento;
use \App\Documento;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('tipoAdministrador');
    }

    public function admin()
    {
        // $alumnosActivos   = User::where('estado',1)->count();
        $alumnosActivos   = DB::table('alumno')->where('estado',1)->count();
        $alumnosInactivos = DB::table('alumno')->where('estado',0)->count();
        $correosEnviados = DB::table('correo')->where('tipo',1)->count();
        $correosRespondidos = DB::table('correo')->where('tipo',2)->count();
        
        return view('Administrador.dashboard', compact('alumnosActivos','alumnosInactivos','correosEnviados','correosRespondidos'));
    }

    //Listar Alumnos pantalla ADMIN
    public function alumnos()
    {
        // $alumnos = User::all()->where('tipo' , 1);
        $alumnos = Alumno::all();
        
        foreach ($alumnos as $alumno) {
            $alumno->name_apoderado = User::where('id', $alumno->id_apoderado)->value('name');
            $alumno->email = User::where('id', $alumno->id_apoderado)->value('email');
            $alumno->nombreCurso = DB::table('curso')->where('idcurso', $alumno->id_curso)->first()->nombre;
            $cantidadMeses = DB::table('plan')->where('idplan', $alumno->id_plan)->first();
        

            if ( $cantidadMeses != null ) {
                $alumno->cantidadMeses = $cantidadMeses->cantidad_meses;
            }else{
                $alumno->cantidadMeses = 'Plan borrado';
            }
            
            
        }
        // dd($alumnos);
        
        return view('Administrador.alumnosAdmin',compact('alumnos'));
    }

    public function profesores()
    {
        $profesores = User::all()->where('tipo' , 2);
        return view('Administrador.profesoresAdmin',compact('profesores'));
    }

    public function adminRevista()
    {
        $revistas = DB::table('revista')->get();
        return view('Administrador.revistaAdmin',compact('revistas'));
    }

    public function adminCorreos()
    {
        $correos = DB::table('correo')->get();
        foreach ($correos as $correo) {
            $nombreAsig = Asignatura::find($correo->idasignatura);
            if ($nombreAsig != null) {
                $correo->nombreAsignatura = $nombreAsig->nombre;
            }else{
                $correo->nombreAsignatura = 'Asignatura borrada';
            }
            
            $nombreProf = User::find($correo->idprofesor);

            if ($nombreProf != null) {
                $correo->nombreProfesor = $nombreProf->name;
            }else{
                $correo->nombreProfesor = 'Profesor Borrado';
            }

            $nombreAl = Alumno::find($correo->idalumno);
            

            if ($nombreAl != null) {
                $correo->nombreAlumno = $nombreAl->nombre;
            }else{
                $correo->nombreAlumno = 'Alumno Borrado';
            }

        }
 
        return view('Administrador.correosAdmin',compact('correos'));
    }

   

    public function modificarSitioWeb()
    {
        $parametros = DB::table('sitio')->get();
        return view('Administrador.modificarSitioWeb', compact('parametros'));
    }

    public function buscarParametro(Request $request)
    {
        $indexTr = $request->indexTr;
        $parametro = DB::table('sitio')->where('id', $request->idParametro)->first();
        return view('Administrador.editarParametro',compact('parametro','indexTr'));
    }

    public function editarParametro(Request $request)
    {
        $parametro = Sitio::find($request->idParametro);
        if($request->opcion == 2){
            $parametro->valor = $request->editor;
        }else{
            $parametro->valor = $request->valor;
        }
        $parametro->save();
        //retorno el request por que viene con todos los datos y ademas el indice de la row
        return $request;
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
        $nombreCurso = DB::table('curso')->where('idcurso' , $idCurso)->first()->nombre;

        foreach ($asignaturas as $asignatura) {
            if($asignatura->idprofesor != null){
                $asignatura->idprofesor = User::find($asignatura->idprofesor)->name;
            }else{
                $asignatura->idprofesor = 'No asignado';
            }
           
        }
        $profesores = User::all()->where('tipo' , 2);
      
    
        return view('Administrador.asignaturasAdmin',compact('asignaturas','nombreCurso','profesores'));
    }

    public function agregarAsignatura(Request $request)
    {
        //obtenemos el campo file definido en el formulario
        $file = $request->file('imagen');
        $nombre = '';
        if ($file != null) {
            //obtenemos el nombre del archivo
            $nombre = $file->getClientOriginalName();

            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('public')->put($nombre,  \File::get($file));
        }
     

        $asignatura = new Asignatura;
        $asignatura->nombre = $request->nombre;
        $asignatura->idcurso = $request->idCurso;
        $asignatura->idprofesor = $request->idprofesor;
        $asignatura->color = $request->color;
        $asignatura->examen = $request->examen;
        $asignatura->descripcion = $request->descripcion;
        if ($file != null) {
            $asignatura->imagen = $nombre;
        }
        
        $asignatura->save();

        $data = Array();
        $data['nombre'] = $request->nombre;
        $data['color'] = $request->color;
        $data['imagen'] = $nombre;
        $data['examen'] = $request->examen;
        $data['descripcion'] = $request->descripcion;

        if ($request->idprofesor != 0) {
            $data['idprofesor'] = User::find($asignatura->idprofesor)->name;
        }else{
            $data['idprofesor'] = 'No asignado';
        }

        return $data;
    }

    public function agregarRevista(Request $request)
    {
         //obtenemos el campo file definido en el formulario
         $file = $request->file('imagen');
         $nombre = '';
         if ($file != null) {
             //obtenemos el nombre del archivo
             $nombre = $file->getClientOriginalName();
 
             //indicamos que queremos guardar un nuevo archivo en el disco local
             \Storage::disk('public')->put($nombre,  \File::get($file));
         }

         $fechaHoyAux = date('Y-m-d h:i:s' );
         $fechaHoy = strtotime ( '-3 hour' , strtotime ($fechaHoyAux) ) ; 
         $fechaHoraHoy = date ( 'Y-m-d H:i:s' , $fechaHoy);
      
         $revista = new Revista;
         $revista->autor = $request->autor;
         $revista->titulo = $request->titulo; 
         $revista->tema = $request->tema; 
         $revista->contenido = $request->contenido; 
         $revista->color = $request->color; 
         $revista->imagen = $nombre; 
         $revista->fecha = $fechaHoraHoy;
         $revista->save();
 
         return 'true';
    }

    public function buscarRevista(Request $request)
    {
        $indexTr = $request->indexTr;
        $revista = Revista::find($request->idRevista);
        return view('Administrador.editarRevista',compact('revista','indexTr'));
    }

    


    public function buscarAsignatura(Request $request)
    {
        $indexTr = $request->indexTr;
        $asignatura = Asignatura::where('idasignatura',$request->idAsignatura)->first();
        $profesores = User::all()->where('tipo' , 2);
        // dd($asignatura);
        return view('Administrador.editarAsignatura',compact('asignatura','profesores','indexTr'));
    }

    public function editarAsignatura(Request $request)
    {
    
         //obtenemos el campo file definido en el formulario
         $file = $request->file('imagen');
         
         if ($file != null) {
            //obtenemos el nombre del archivo
            $nombre = $file->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('public')->put($nombre,  \File::get($file));
         }

        $asignatura = Asignatura::where('idasignatura',$request->idAsignatura)->first();
        $asignatura->nombre = $request->nombre;
        $asignatura->idprofesor = $request->idprofesor;
        $asignatura->color = $request->color;
        $asignatura->examen = $request->examen;
        $asignatura->descripcion = $request->descripcion;
        if ($file != null) {
            $asignatura->imagen = $nombre;
        }
        $asignatura->save();
        
        if ($request->idprofesor != 0) {
            $asignatura->idprofesor = User::find($asignatura->idprofesor)->name;
        }else{
            $asignatura->idprofesor = 'No asignado';
        }
        

        return $asignatura;
    }

    public function editarRevista(Request $request)
    {
        //obtenemos el campo file definido en el formulario
        $file = $request->file('imagen');
         
        if ($file != null) {
           //obtenemos el nombre del archivo
           $nombre = $file->getClientOriginalName();
           //indicamos que queremos guardar un nuevo archivo en el disco local
           \Storage::disk('public')->put($nombre,  \File::get($file));
        }

        $revista = Revista::find($request->idRevista);
        $revista->autor = $request->autor;
        $revista->titulo = $request->titulo;
        $revista->tema = $request->tema;
        $revista->contenido = $request->contenido;
        $revista->fecha = $request->fecha;
        $revista->color = $request->color;

        if ($file != null) {
            $revista->imagen = $nombre;
        }
        $revista->save();

        return 'true';
    }

    public function eliminarRevista(Request $request)
    {
        $revista = Revista::find($request->idRevista);
        $revista->delete();
        //retorno el request por que viene con todos los datos y ademas el indice de la row
        return $request;
    }

    

    public function eliminarAsignatura(Request $request)
    {
        //borra la asignatura
        $asignatura = Asignatura::find($request->idAsignatura);
        $asignatura->delete();

        $unidades = Unidad::where('idasignatura', $request->idAsignatura);

        $unidadesABorrar = Array();

        foreach ($unidades as $unidad) {
            $unidadesABorrar[] = $unidad->id;
        }

        $unidades->delete();

        $clases = Clase::whereIn('idunidad', $unidadesABorrar);
        $clases->delete();

        $documentos = Documento::whereIn('idUnidad',$unidadesABorrar);
        $documentos->delete();

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

        $nombreCurso = DB::table('curso')->where('idcurso' , $idCurso)->first()->nombre;

        return view('Administrador.unidadesAdmin',compact('unidades','asignaturas','nombreCurso'));
    }

    public function agregarUnidad(Request $request)
    {
        $unidad = new Unidad;
        $unidad->nombre = $request->nombre;
        $unidad->idasignatura = $request->asignatura;
        $unidad->examen = $request->examen;
        $unidad->password = $request->password;
        $unidad->save();

        $nombreAsignatura = Asignatura::find($request->asignatura)->nombre;

        $data = Array();
        $data['nombre'] = $request->nombre;
        $data['asignatura'] = $nombreAsignatura;
        $data['examen'] = $request->examen;
        $data['password'] = $request->password;
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
        $unidad->examen = $request->examen;
        $unidad->password = $request->password;
        $unidad->idasignatura = $request->asignatura;
        $unidad->save();

        $nombreAsignatura = Asignatura::find($request->asignatura)->nombre;

        $data = Array();
        $data['nombre'] = $request->nombre;
        $data['examen'] = $request->examen;
        $data['password'] = $request->password;
        $data['asignatura'] = $nombreAsignatura;
        $data['indexTr'] = $request->indexTr;
        return $data;
    }

    public function eliminarUnidad(Request $request)
    {
        $unidad = Unidad::find($request->idUnidad);
        $unidad->delete();

        $clase = Clase::where('idunidad', $request->idUnidad);
        $clase->delete();

        $documento = Documento::where('idUnidad',$request->idUnidad);
        $documento->delete();

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

        $nombreCurso = DB::table('curso')->where('idcurso' , $idCurso)->first()->nombre;

        return view('Administrador.clasesAdmin',compact('clases', 'idCurso','unidades','asignaturas','nombreCurso'));
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

        $documento = Documento::where('idClase',$request->idClase);
        $documento->delete();

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

        $nombreCurso = DB::table('curso')->where('idcurso' , $idCurso)->first()->nombre;

        return view('Administrador.documentosAdmin', compact('documentos', 'asignaturas', 'idCurso','nombreCurso'));
    }

    public function agregarDocumento(Request $request)
    {
        //obtenemos el campo file definido en el formulario
        $file = $request->file('documento');

        //obtenemos el nombre del archivo
        $nombre = $file->getClientOriginalName();

        //indicamos que queremos guardar un nuevo archivo en el disco local
        \Storage::disk('public')->put($nombre,  \File::get($file));

        // Agregar Nuevo Documento
        $documento = new Documento;
        $documento->nombre = $request->nombre;
        $documento->documento = $nombre;
        $documento->link = $request->link;
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
        $data['link'] = $request->link;
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
            \Storage::disk('public')->put($nombre,  \File::get($file));
        }

        $documento = Documento::find($request->idDocumento);
        $documento->nombre = $request->nombre;
        if ($file != null) {
            $documento->documento = $nombre;
        }
        $documento->link = $request->link;
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
        $data['link'] = $request->link;
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


    public function adminPlanes($idCurso)
    {
     
        $planes = DB::table('plan')
        ->where('id_curso', $idCurso)
        ->get();

        $nombreCurso = DB::table('curso')->where('idcurso' , $idCurso)->first()->nombre;
        

        foreach ($planes as $plan) {
            $plan->nombreCurso = $nombreCurso;
        }
   
        return view('Administrador.planesAdmin', compact('planes' , 'nombreCurso','idCurso'));

    }

    public function agregarPlan(Request $request)
    {
        $plan = new Plan;

        $plan->nombre = $request->nombre;
        $plan->cantidad_meses = $request->cantidadMeses;
        $plan->precio = $request->precio;
        $plan->id_curso = $request->idCurso;
        $plan->estado = 1;
        $plan->save();

        $data = Array();
        $data['nombre'] = $request->nombre;
        $data['cantidad_meses'] = $request->cantidadMeses;
        $data['precio'] = $request->precio;
        $data['estado'] = 'Activo';
        $data['id'] = $plan->idplan;
        return $data;

     
    }


    public function buscarPlan(Request $request)
    {
      
        $indexTr = $request->indexTr;
        $idPlan = $request->idPlan;

        $plan = DB::table('plan')->where('idplan', $idPlan)->first();
        

        return view('Administrador.editarPlan',compact('plan','indexTr'));
    }

    public function editarPlan(Request $request)
    {
        $plan = Plan::find($request->idPlan);
        $plan->nombre = $request->nombre;
        $plan->cantidad_meses = $request->cantidadMeses;
        $plan->precio = $request->precio;
        $plan->save();

        //retorno el request por que viene con todos los datos y ademas el indice de la row
        return $request;
    }

    // public function eliminarPlan(Request $request)
    // {
      
    //     $plan = Plan::find($request->idPlan);
    //     $plan->delete();
    //     //retorno el request por que viene con todos los datos y ademas el indice de la row
    //     return $request;
    // }

    public function cambiarEstadoPlan(Request $request)
    {
        $plan = Plan::find($request->idPlan);

        if($plan->estado == 0){
            $plan->estado = 1;
        }else{
            $plan->estado = 0;
        }
        $plan->save();
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
