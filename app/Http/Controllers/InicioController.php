<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Sitio;

class InicioController extends Controller
{
    public function inicio(Request $request)
    {
        $cursos = DB::table('curso')->get();
        foreach ($cursos as $curso) {
           $precioPlan = DB::table('plan')->where('id_curso', $curso->idcurso)->get()->min('precio');
           $curso->precioPlan = $precioPlan;
        }

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
    
 
        if (Auth::user() == null) {
            return view('welcome',compact('cursos','eslogan','invitacionPlanAcademico','sobreNosotros','direccion',
            'telefono','email','facebook','twitter','instagram','whatsapp'
        
        ));
        }else{
    
            if (Auth::user()->tipo == 0) {
                return redirect()->route('admin');
            }else{
                // return redirect()->route('alumno');
                return redirect()->route('apoderado');
            }
          
    
        }
    }

    public function caseduca()
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

        return view('nosotros',compact('cursos','eslogan','invitacionPlanAcademico','sobreNosotros','direccion',
            'telefono','email','facebook','twitter','instagram','whatsapp'
        ));
    }

    public function contacto()
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

        return view('contacto',compact('cursos','eslogan','invitacionPlanAcademico','sobreNosotros','direccion',
            'telefono','email','facebook','twitter','instagram','whatsapp'
        ));
    }

    public function revista()
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

        return view('blog',compact('cursos','eslogan','invitacionPlanAcademico','sobreNosotros','direccion',
            'telefono','email','facebook','twitter','instagram','whatsapp'
        ));
    }

    public function planacademico()
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

        return view('planacademico',compact('cursos','eslogan','invitacionPlanAcademico','sobreNosotros','direccion',
            'telefono','email','facebook','twitter','instagram','whatsapp'
        ));
    }

    public function detalleCurso($id)
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


        $curso = DB::table('curso')->where('idcurso', $id)->first();
        
        $asignaturas = DB::table('asignatura')->where('idcurso', $id)->get();
        $precioPlan = DB::table('plan')->where('id_curso', $id)->get()->min('precio');

        $curso->asignaturas = $asignaturas;
        $curso->precioPlan = $precioPlan;
        
        return view('detalleCurso', compact('curso','eslogan','invitacionPlanAcademico','sobreNosotros','direccion',
        'telefono','email','facebook','twitter','instagram','whatsapp'));
    }
}
