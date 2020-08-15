<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function admin()
    {
        $alumnos = User::all()->where('tipo' , 1);
        return view('Administrador.alumnosAdmin',compact('alumnos'));

    }

    public function profesores()
    {
        $profesores = User::all()->where('tipo' , 2);
        return view('Administrador.profesoresAdmin',compact('profesores'));
    }

    public function adminAsignaturas($idCurso)
    {
        $asignaturas = \App\Asignatura::all()->where('idcurso' , $idCurso);
        return view('Administrador.asignaturasAdmin',compact('asignaturas'));
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
     

        return view('Administrador.unidadesAdmin',compact('unidades'));
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

        return view('Administrador.clasesAdmin',compact('clases'));
    }
}
