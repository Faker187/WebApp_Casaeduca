<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Session;
use Str;
use Mail;
use \App\User;
use \App\Correo;
use \App\Sitio;
use \App\Alumno;
use \App\Curso;
use App\Asignatura;


class AlumnoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('alumnoActivo');
    }

    public function apoderado()
    {   
       
        $eslogan = Sitio::where('id' ,1)->first()->valor;
        $invitacionPlanAcademico = Sitio::where('id' ,2)->first()->valor;
        $sobreNosotros = Sitio::where('id' ,3)->first()->valor;
        $direccion = Sitio::where('id' ,4)->first()->valor;
        $telefono = Sitio::where('id' ,5)->first()->valor;
        $email = Sitio::where('id' ,6)->first()->valor;
        $facebook = Sitio::where('id' ,7)->first()->valor;
        $twitter = Sitio::where('id' ,8)->first()->valor;
        $instagram = Sitio::where('id' ,9)->first()->valor;
        $whatsapp = Sitio::where('id' ,10)->first()->valor;

    


        $idApoderado = Auth::user()->id;
        $alumnos = DB::table('alumno')->where('id_apoderado' , $idApoderado)->get();

        foreach ($alumnos as $alumno) {

            $alumno->nombreCurso = DB::table('curso')->where('idcurso',$alumno->id_curso)->first()->nombre;
            $meses = DB::table('plan')->where('idplan', $alumno->id_plan)->first()->cantidad_meses;
            if ($meses == 1) {
                $alumno->meses = $meses.' Mes';
            }else{
                $alumno->meses = $meses.' Meses';
            }

        }

        // dd($alumnos);
        return view('Alumno.apoderado', compact('alumnos','eslogan','invitacionPlanAcademico','sobreNosotros','direccion',
        'telefono','email','facebook','twitter','instagram','whatsapp'));
    }

    public function verificarAlumnos ()
    {
       
        $idApoderado = Auth::user()->id;
      
        $alumnos = DB::table('alumno')->where('id_apoderado' , $idApoderado)->get();

        $fechaHoyAux = date('Y-m-d h:i:s' );
        $fechaHoy = strtotime ( '-3 hour' , strtotime ($fechaHoyAux) ) ; 
        // $fechaHoraHoy = date ( 'Y-m-d H:i:s' , $fechaHoy);


        foreach ($alumnos as $alumno) {
             //Revisa los alumnos y verifica si hoy vencio su plan, de ser asi, los desactiva
             $fecha_expiracion = strtotime($alumno->fin_plan);
             // dd($fecha_expiracion);
 
             if (1611705900 > $fecha_expiracion) {
                 //Desactiva Alumno
                 $alumnodesactivado = Alumno::find($alumno->id);
                 $alumnodesactivado->estado = 0;
                 $alumnodesactivado->save();
             }
             //FIN Revisa los alumnos y verifica si hoy vencio su plan, de ser asi, los desactiva
        }

        return redirect()->route('apoderado');
    }
    
    public function alumno()
    {
        $curso = Auth::user()->id_curso;
        $asignaturas = Asignatura::where('idcurso',$curso)->get();

        foreach ($asignaturas as $asignatura) {
            

            if ($asignatura->idprofesor != 0) {

                $profesor = User::find($asignatura->idprofesor);

                $asignatura->nombreProfesor = $profesor->name;
                $asignatura->correoProfesor = $profesor->email;
            }else{
                $asignatura->nombreProfesor = null;
                $asignatura->correoProfesor = null;
            }
           
        }
        
        return view('Alumno.alumno', compact('asignaturas'));
    }

    public function portalAlumno($id)
    {
        $idAlumno = $id;

        Session::forget('idAlumnoActual', $idAlumno);
        Session::push('idAlumnoActual', $idAlumno);

        $curso = Alumno::find($id)->id_curso;
        $nombreAlumno = Alumno::find($id)->nombre;
        $diminutivo = explode(' ', $nombreAlumno);
        $diminutivo = $diminutivo[0];
        $asignaturas = Asignatura::where('idcurso',$curso)->get();
        $nombreCurso = Curso::where('idcurso',$curso)->first()->nombre;

        foreach ($asignaturas as $asignatura) {
            

            $unidades = DB::table('unidad')->select('idunidad')->where('idasignatura' , $asignatura->idasignatura)->get();
            $idUnidades = Array();

            foreach ($unidades as $unidad) {
                $idUnidades[] = $unidad->idunidad;
            }

            $asignatura->totalClasesAsignatura = DB::table('clase')->whereIn('idunidad', $idUnidades)->count();

            $clases = DB::table('clase')->whereIn('idunidad', $idUnidades)->get();
            $idClases = Array();

            foreach ($clases as $clase) {
                $idClases[] = $clase->idclase;
            }

            $cantidadClasesCompletadas = DB::table('seguimiento')
                                        ->whereIn('id_clase', $idClases)
                                        ->where('id_alumno', $idAlumno)
                                        ->where('estado', 1)
                                        ->count();

            $asignatura->cantidadClasesCompletadas = $cantidadClasesCompletadas;

            $respuestasNuevas = DB::table('correo')
            ->where('idalumno',$idAlumno)
            ->where('idasignatura',$asignatura->idasignatura)
            ->where('tipo', 2)
            ->where('visto', 0)
            ->count();

            $asignatura->respuestasNuevas = $respuestasNuevas;
       
            if ($asignatura->idprofesor != 0) {

                $profesor = User::where('id', $asignatura->idprofesor);
                dd($profesor);
                $asignatura->nombreProfesor = $profesor->name;
                $asignatura->correoProfesor = $profesor->email;
            }else{
                $asignatura->nombreProfesor = null;
                $asignatura->correoProfesor = null;
            }
            

        }
        
        return view('Alumno.portalAlumno', compact('asignaturas','nombreCurso','diminutivo','idAlumno'));
    }

    public function contactarProfesor(Request $request)
    {
        
        $profesor = User::find($request->idProfesor);
        $asignatura = Asignatura::find($request->idAsignatura);

        $idAlumno = $request->idAlumno;
        $idCurso = DB::table('alumno')->where('id', $idAlumno)->first()->id_curso;
        $cantidadIntentos = 99;

        $correosEsteMes = DB::table('correo')
        ->where('idalumno' , $idAlumno)
        ->count();

        $cantidadIntentos = $cantidadIntentos - $correosEsteMes;
        
        $nombreCurso = DB::table('curso')->where('idcurso', $idCurso)->first()->nombre;
        $nombreAlumno = DB::table('alumno')->where('id', $idAlumno)->first()->nombre;

        if ($cantidadIntentos == 0) {
            return 'sin intentos';
        }else{
            return view('Alumno.contactarProfesor',compact('profesor','asignatura' , 'cantidadIntentos','nombreCurso','nombreAlumno','idAlumno'));

        }

    }

    public function enviarCorreo(Request $request)
    {
     
        $correo = new Correo;
        $correo->idalumno = $request->idalumno;
        $correo->idprofesor = $request->idprofesor;
        $correo->idasignatura = $request->idasignatura;
        $correo->correo = $request->correo;
        $correo->asunto = $request->asunto;
        $correo->mensaje = $request->mensaje;
        $correo->fecha = $fechaActual = date("Y-m-d h:i:s");
        $correo->token = Str::random(20);
        $correo->tipo= 1;
        $correo->save();

   
        $data = [
            "nombreAlumno" => $request->nombreAlumno,
            "nombreAsignatura" => $request->nombreAsignatura,
            "nombreCurso" => $request->nombreCurso,
            "mensaje" => $request->mensaje,
            "idCorreo" => $correo->id,
            "token" => $correo->token
         ];

        $subject = $request->asunto;
        $for = $request->correo;

        Mail::send('email',$data, function($msj) use($subject,$for){
            $msj->from("contacto@casaeduca.cl","Casa Educa, Mensaje Alumno");
            $msj->subject($subject);
            $msj->to($for);
        });

        

        return $request;
    }

    public function renovarPlan($id)
    {
        $eslogan = Sitio::where('id' ,1)->first()->valor;
        $invitacionPlanAcademico = Sitio::where('id' ,2)->first()->valor;
        $sobreNosotros = Sitio::where('id' ,3)->first()->valor;
        $direccion = Sitio::where('id' ,4)->first()->valor;
        $telefono = Sitio::where('id' ,5)->first()->valor;
        $email = Sitio::where('id' ,6)->first()->valor;
        $facebook = Sitio::where('id' ,7)->first()->valor;
        $twitter = Sitio::where('id' ,8)->first()->valor;
        $instagram = Sitio::where('id' ,9)->first()->valor;
        $whatsapp = Sitio::where('id' ,10)->first()->valor;

        $alumno = Alumno::find($id);
        $planes = DB::table('plan')->where('id_curso', $alumno->id_curso)->get();

        $idAlumno = $id;

        return view('Alumno.renovarPlan', compact('planes','idAlumno','eslogan','invitacionPlanAcademico','sobreNosotros','direccion',
        'telefono','email','facebook','twitter','instagram','whatsapp'));
    }

   

    public function cambiarNombreAlumno(Request $request)
    {
   
        $alumno = Alumno::find($request->idAlumno);
        $alumno->nombre = $request->nombre;
        $alumno->save();
       
        return redirect()->back();
    }
}
