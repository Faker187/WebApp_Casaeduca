<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sitio;
use \App\Documento;
use \App\Seguimiento;
use DB;
use Session;

class AsignaturaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function asignatura(Request $request, $id)
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

        $unidades = \App\Unidad::where('idasignatura', $id)->get();
        foreach ($unidades as $unidad) {
            $unidad->clases = \App\Clase::where('idunidad', $unidad->idunidad)->get();

         

            
        }

    
        return view('Asignatura.asignatura',compact('unidades','eslogan','invitacionPlanAcademico','sobreNosotros','direccion',
        'telefono','email','facebook','twitter','instagram','whatsapp'));
    }

    public function asignatura2(Request $request, $id)
    {

        $idAlumno = Session::get('idAlumnoActual')[0];

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

        $asignatura = DB::table('asignatura')->where('idasignatura', $id)->first();

        $unidades = \App\Unidad::where('idasignatura', $id)->get();
        foreach ($unidades as $unidad) {
            $unidad->clases = \App\Clase::where('idunidad', $unidad->idunidad)->get();

            foreach ($unidad->clases as $clase) {
                $doc = DB::table('documento')->where('idClase', $clase->idclase)->value('documento');
                $clase->tipo_documento =  $doc;
            }

        }
       
        return view('asignatura2',compact('unidades','asignatura','idAlumno','eslogan','invitacionPlanAcademico','sobreNosotros','direccion',
        'telefono','email','facebook','twitter','instagram','whatsapp'));
    }


    public function registrarClaseSesion(Request $request)
    {
        $fechaActual = strtotime(date('Y-m-d h:i:s'));

        $seguimientoClaseActual = Session::get('seguimientoClaseActual')[0];

        if ($seguimientoClaseActual == null) {
            $seguimientoClaseActual = $fechaActual;
        }


        Session::forget('seguimientoClaseActual');
        Session::push('seguimientoClaseActual', $fechaActual);

        $tiempoEnClase = $fechaActual - $seguimientoClaseActual;


        if ($tiempoEnClase > 300) {

            $seguimiento = DB::table('seguimiento')
            ->where('id_alumno', $request->idAlumno)
            ->where('id_clase', $request->idClase)
            ->first();

            if ($seguimiento == null) {

                $seguimientoCrear = new Seguimiento;
                $seguimientoCrear->id_alumno = $request->idAlumno;
                $seguimientoCrear->id_clase = $request->idClase;
                $seguimientoCrear->estado = 1;
                $seguimientoCrear->save();

            }else{
                $seguimientoEditar = Seguimiento::where('id_alumno', $request->idAlumno)->where('id_clase', $request->idClase)->first();
                $seguimientoEditar->estado = 1;
                $seguimientoEditar->save();
            }
    
            
        }else{

            $seguimiento = DB::table('seguimiento')
            ->where('id_alumno', $request->idAlumno)
            ->where('id_clase', $request->idClase)
            ->first();

            if ($seguimiento == null) {

                $seguimientoCrear = new Seguimiento;
                $seguimientoCrear->id_alumno = $request->idAlumno;
                $seguimientoCrear->id_clase = $request->idClase;
                $seguimientoCrear->estado = 0;
                $seguimientoCrear->save();

            }

        }

        return var_dump($tiempoEnClase);
    }
}
