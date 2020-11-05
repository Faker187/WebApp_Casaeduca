<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Administrador.admin'); 
    }

    public function verificarCuenta()
    {
        if (Auth::user()->tipo == 0) {
            return redirect()->route('admin');
        }else{
            //si no es admin es alumno, esto puede cambiar si es que agregamos un tipo Profesor
            // return redirect()->route('alumno');
            // return redirect()->route('apoderado');
            return redirect()->action('AlumnoController@verificarAlumnos');
        }
    }

}
