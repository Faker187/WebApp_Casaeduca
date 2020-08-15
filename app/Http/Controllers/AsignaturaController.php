<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function asignatura(Request $request, $id)
    {
        $unidades = \App\Unidad::where('idasignatura', $id)->get();
        foreach ($unidades as $unidad) {
            $unidad->clases = \App\Clase::where('idunidad', $unidad->idunidad)->get();
        }

        return view('Asignatura.asignatura',compact('unidades'));
    }
}
