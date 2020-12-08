<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Mail;
use Str;
use Session;
use App\Sitio;
use App\User;
use App\Revista;
use App\Correo;

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
        $icono1 = Sitio::where('id' ,19)->first()->valor;
        $icono2 = Sitio::where('id' ,20)->first()->valor;
        $icono3 = Sitio::where('id' ,21)->first()->valor;
        $icono4 = Sitio::where('id' ,22)->first()->valor;
        $icono5 = Sitio::where('id' ,23)->first()->valor;



        
    
 
        if (Auth::user() == null) {
            return view('welcome',compact('cursos','eslogan','invitacionPlanAcademico','sobreNosotros','direccion',
            'telefono','email','facebook','twitter','instagram','whatsapp','icono1','icono2','icono3','icono4','icono5'
        
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

        $quienesSomos = Sitio::where('id' ,11)->first()->valor;
        $quienesSomosP2 = Sitio::where('id' ,34)->first()->valor;
        $quienesSomosSubT = Sitio::where('id' ,35)->first()->valor;
        $mision = Sitio::where('id' ,12)->first()->valor;
        $vision = Sitio::where('id' ,13)->first()->valor;

        return view('nosotros',compact('cursos','eslogan','invitacionPlanAcademico','sobreNosotros','direccion',
            'telefono','email','facebook','twitter','instagram','whatsapp','quienesSomos','mision','vision','quienesSomosP2','quienesSomosSubT'
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

    public function formularioContacto(Request $request)
    {
        
        $data = [
            "email" => $request->email,
            "mensaje" => $request->message,
            "name" => $request->name,
            "subject" => $request->subject,
         ];

        // $subject = $request->subject;
        // $for = $request->email;

        // Mail::send('emailFormContacto',$request->all(), function($msj) use($subject,$for){
        //     $msj->from("contact@casaeduca.cl","Casa Educa, Nuevo Contacto");
        //     $msj->subject($subject);
        //     $msj->to($for);
        // });

        // $subject = "test";
        // $for = "casaeduca@yopmail.com";

        $subject = $request->subject;
        // $for = $request->email;
        $for = DB::table('sitio')->where('parametro', 'E-mail')->first()->valor;

        
        /* Mail::send('emailFormContacto',$data, function($msj) use($subject,$for){
        $msj->from("contacto@casaeduca.cl","Casa Educa, Nuevo Contacto");
        $msj->subject($subject);
            $msj->to('benjka.17@gmail.com');
        }); */

        Mail::send('emailFormContacto',$data, function($msj2) use($subject,$for){
            $msj2->from("contacto@casaeduca.cl","Casa Educa, Nuevo Contacto");
            $msj2->subject($subject);
                $msj2->to($for);
            });
        return 'true';
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

        $revistas =  Revista::all();

        return view('blog',compact('revistas','eslogan','invitacionPlanAcademico','sobreNosotros','direccion',
            'telefono','email','facebook','twitter','instagram','whatsapp'
        ));
    }

    public function detalleRevista($id)
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

        $revista = Revista::find($id);


        return view('blogv', compact('revista','eslogan','invitacionPlanAcademico','sobreNosotros','direccion',
        'telefono','email','facebook','twitter','instagram','whatsapp'));
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

        $planAcademicoSubtitulo = Sitio::where('id' ,14)->first()->valor;
        $planAcademicoNuestroProEducativo = Sitio::where('id' ,15)->first()->valor;
        $planAcademicoSuscripcionMensual = Sitio::where('id' ,16)->first()->valor;
        $planAcademicoSoporteEducacional = Sitio::where('id' ,17)->first()->valor;
        $planAcademicoDescripcion = Sitio::where('id' ,18)->first()->valor;

        return view('planacademico',compact('cursos','eslogan','invitacionPlanAcademico','sobreNosotros','direccion',
            'telefono','email','facebook','twitter','instagram','whatsapp','planAcademicoSubtitulo','planAcademicoNuestroProEducativo',
            'planAcademicoSuscripcionMensual','planAcademicoSoporteEducacional','planAcademicoDescripcion'
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

    public function responderCorreo($id, $token)
    {
        //Verificar Respuesta Existente
        $correo = DB::table('correo')->where('token', $token)->where('tipo', 2)->count();

        $respondido = false;
        if ($correo != 0) {
            $respondido = true;
        }

        $idAlumno =  DB::table('correo')->where('id', $id)->where('token', $token)->where('tipo', 1)->first()->idalumno;
        $idCursoAlumno = DB::table('alumno')->where('id', $idAlumno)->first()->id_curso;
        $nombreCursoAlumno = DB::table('curso')->where('idcurso', $idCursoAlumno)->first()->nombre;
      

        $datos = DB::table('correo')->where('id', $id)->where('token', $token)->where('tipo', 1)->first();
        $datos->nombreAsignatura = DB::table('asignatura')->where('idasignatura', $datos->idasignatura)->first()->nombre;
        $datos->nombreAlumno = DB::table('alumno')->where('id', $datos->idalumno)->first()->nombre;
        $datos->nombreCurso = $nombreCursoAlumno;
        // dd($datos);
        return view('Alumno.responderCorreo', compact('datos','respondido'));
    }
    
    public function enviarRespuestaProfesor(Request $request)
    {
        $correo = new Correo;
        $correo->idalumno = $request->idalumno;
        $correo->idprofesor = $request->idprofesor;
        $correo->idasignatura = $request->idasignatura;
        $correo->correo = $request->correo;
        $correo->asunto = $request->asunto;
        $correo->mensaje = $request->respuestaProfesor;
        $correo->fecha = date("Y-m-d h:i:s");
        $correo->token = $request->token;
        $correo->tipo = 2;
        $correo->visto = 0;
        $correo->save();

        return 'true';
    }

    public function buscarCorreos(Request $request)
    {
        $mesActual = date('m');

        $correos = DB::table('correo')
        ->where('idalumno', $request->idAlumno)
        ->where('idprofesor', $request->idProfesor)
        ->where('idasignatura', $request->idAsignatura)
        ->whereRaw("date_format(fecha, '%c') = $mesActual")
        ->where('tipo', 1)
        ->get();

      
        foreach ($correos as $correo) {

            $correoRespuesta = Correo::where('token', $correo->token)->where('tipo', 2)->first();
            if ($correoRespuesta != null) {
                $correoRespuesta->update(['visto' => 1]);
            }

            $correo->respuesta = DB::table('correo')->where('tipo', 2)->where('token',$correo->token)->first();
            
        }
        
        return view('Alumno.listaCorreos', compact('correos'));
    }

    public function verificarEmail(Request $request)
    {
        $usuario = DB::table('users')->where('email', $request->email)->count();

        if ($usuario != 0) {
            return 'ya existe';
        }else{
            return 'disponible';
        }
        
    }
}
