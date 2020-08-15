<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Asignatura;


class AlumnoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function alumno()
    {
        $curso = Auth::user()->id_curso;
        $asignaturas = Asignatura::where('idcurso',$curso)->get();
      
        return view('Alumno.alumno', compact('asignaturas'));
    }
}
