<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Clase;
use DB;

class ClaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function clase($idClase)
    {

        $clase =  DB::table("clase")->where('idclase', $idClase)->first();
        // dd($clase);
        //contenidoClase
        $contenido = $clase->contenido;
        return $contenido;
    }
}
