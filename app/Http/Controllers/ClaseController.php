<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Clase;
use \App\Documento;
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
        $documentos = Documento::where('idClase', $clase->idclase)->get();
        return view('Clase.plantillaClase', compact('clase','documentos'));
        // //contenidoClase
        // $contenido = $clase->contenido;
        // return $contenido;
    }
}
