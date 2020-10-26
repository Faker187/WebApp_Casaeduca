<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Mail;
use \App\User;
use \App\Curso;
use App\Asignatura;


class AlumnoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('alumnoActivo');
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

    public function contactarProfesor(Request $request)
    {
        $profesor = User::find($request->idProfesor);
        $asignatura = Asignatura::find($request->idAsignatura);

        $idAlumno = Auth::user()->id;
        $cantidadIntentos = 3;

        $correosEsteMes = DB::table('correo')
        ->where('idalumno' , $idAlumno)
        ->where('idprofesor' , $request->idProfesor)
        ->where('idasignatura' , $request->idAsignatura)
        ->count();

        $cantidadIntentos = $cantidadIntentos - $correosEsteMes;
        
        $nombreCurso = DB::table('curso')->where('idcurso',Auth::user()->id_curso)->first()->nombre;
        $nombreAlumno = Auth::user()->name;

        return view('Alumno.contactarProfesor',compact('profesor','asignatura' , 'cantidadIntentos','nombreCurso','nombreAlumno'));
    }

    public function enviarCorreo(Request $request)
    {
       
        $subject = $request->asunto;
        // $for = $request->correo;
        $for = 'iv.henriquez.96@gmail.com';

        Mail::send('email',$request->all(), function($msj) use($subject,$for){
            $msj->from("correoprueba@gmail.com","Casa Educa, Mensaje Alumno");
            $msj->subject($subject);
            $msj->to($for);
        });
       
        return $request;
    }
}
