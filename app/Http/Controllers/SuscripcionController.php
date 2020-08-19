<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;
use Session;
use Transbank\Webpay\Configuration;
use Transbank\Webpay\Webpay;



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
        $user = User::all()->where('email', $request->email)->first();

        if (!$user) {

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
                    // 'fecha_pago' => $fechaActual,
                    // 'fin_plan' => $fin_plan,
                    'estado' => 0
                ]);
    
                 return view('Suscripcion.suscripcionRealizada'); //invitar a loguear junto con el mensaje de felicitaciones
        
        }else{
            dd('Ya existe un usuario con ese correo');
        }

        dd('Crear Suscripcion' , $request);
    }


    public function pagarPlan(Request $request)
    {
        $transaction = (new Webpay(Configuration::forTestingWebpayPlusNormal()))
        ->getNormalTransaction();

        $usuario = Auth::user();
        switch ($usuario->id_plan) {
            case '1':
                $monto = 10000;
                break;
            case '2':
                $monto = 20000;
                break;
            case '3':
                $monto = 30000;
                break;
            
            default:
                $monto = 0;
                break;
        }   
        // dd($monto);

        $sessionId = Session::getId();

        $buyOrder = strval(rand(100000, 999999999));
        $returnUrl = 'http://localhost:8000/finalizarPago';
        $finalUrl = 'http://localhost:8000/activarCuenta';
        $initResult = $transaction->initTransaction(
                $monto, $buyOrder, $sessionId, $returnUrl, $finalUrl);

        $formAction = $initResult->url;
        $tokenWs = $initResult->token;

        return view('Suscripcion.pagarPlan',compact('formAction','tokenWs'));
    }

    public function finalizarPago(Request $request)
    {
        $transaction = (new Webpay(Configuration::forTestingWebpayPlusNormal()))
        ->getNormalTransaction();

        $tokenWs = filter_input(INPUT_POST, 'token_ws');
        $result = $transaction->getTransactionResult($request->input("token_ws"));
        $output = $result->detailOutput;
        if ($output->responseCode == 0) {
            // Transaccion exitosa, puedes procesar el resultado con el contenido de
            // las variables result y output.
        }

        return view('Suscripcion.terminarPago', compact('result','tokenWs'));
    }

    public function activarCuenta(Request $request)
    {
        $idUsuario = Auth::user()->id;
        $meses = Auth::user()->id_plan;

        // se realiza el pago y parte desde hoy
        $fechaActual = date("Y-m-d");
        // y termina en la cantidad de meses seleccionada
        $fin_plan = date('Y-m-d', strtotime("+".$meses." months", strtotime($fechaActual)));

        $usuario = DB::table('users')
                    ->where('id', $idUsuario)
                    ->update(['estado' => 1,'fecha_pago' => $fechaActual, 'fin_plan' => $fin_plan]);
     
        return redirect()->route('alumno');
    }
}
