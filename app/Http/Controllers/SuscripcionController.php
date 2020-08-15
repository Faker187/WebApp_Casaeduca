<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;


class SuscripcionController extends Controller
{
    public function suscribirse()
    {
        return view('Suscripcion.suscribete');
    }

    public function renovarSuscripción(Request $request)
    {
        //Aqui se hará una variable de prueba ya que deberia ir a pagar la suscripcion via transbank
        $pagoRealizado = true; //false, el pago fallo

        if ($pagoRealizado) {
            return view('Suscripcion.renovacionRealizada');  //invitar a loguear junto con el mensaje de felicitaciones
        }else{
            return view('Suscripcion.pagoFallido');
        }

    }

    public function crearSuscipcion(Request $request)
    {
        //Aqui se hará una variable de prueba ya que deberia ir a pagar la suscripcion via transbank
        $pagoRealizado = true; //false, el pago fallo
        //Verificar si el Email está usado
        $user = User::all()->where('email', $request->email)->first();

        if (!$user) {
            if ($pagoRealizado) {

                // se realiza el pago y parte desde hoy
                $fechaActual = date("Y-m-d");
                // y termina en la cantidad de meses seleccionada
                $fin_plan = date('Y-m-d', strtotime("+".$request->plan." months", strtotime($fechaActual)));

                //Se crea el nuevo Usuario
                User::create([
                    'name' => $request->nombreCompletoAlumno,
                    'name_apoderado' => $request->nombreCompletoApoderado,
                    'genero' => $request->genero,
                    'id_curso' => $request->curso,
                    'id_plan' => $request->plan,
                    'email' => $request->email,
                    'password' => \Hash::make($request->password),
                    'tipo' => 1, //0 es admin 2 es profesor
                    'fecha_pago' => $fechaActual,
                    'fin_plan' => $fin_plan,
                    'estado' => 1
                ]);
    
                 return view('Suscripcion.suscripcionRealizada'); //invitar a loguear junto con el mensaje de felicitaciones
            }else{
                return view('Suscripcion.pagoFallido');
            }
        }else{
            dd('Ya existe un usuario con ese correo');
        }

        dd('Crear Suscripcion' , $request);
    }
}
