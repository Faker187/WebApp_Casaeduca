<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Plan;
use App\Pago;
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
                    // 'id_curso' => $request->curso,
                    // 'id_plan' => $request->plan,
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

            $planes = Plan::all();
            return view('Suscripcion.seleccionarPlan',compact('planes'));
  

    }

    public function procesarPago(Request $request)
    {
        $transaction = (new Webpay(Configuration::forTestingWebpayPlusNormal()))
        ->getNormalTransaction();

        $precio = DB::table('plan')->where('id_curso' , $request->curso)->first()->precio;
        $monto = $precio * $request->plan;

        //Subir a sesión que curso y plan eligió, una vez procesado el pago se le asignará curso y plan en bd
        Session::forget('idCurso');
        Session::forget('idPlan');
        Session::put('idCurso', $request->curso);
        Session::put('idPlan', $request->plan);

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
            $idUsuario = Auth::id();

            $pago = new Pago;
            $pago->buyOrder = $result->buyOrder;
            $pago->idAlumno = $idUsuario;
            $pago->amount = $output->amount;
            $pago->cardNumber = $result->cardDetail->cardNumber;
            $pago->transactionDate = $result->transactionDate;
            $pago->commerceCode = $output->commerceCode;
            $pago->save();

            $idCurso = Session::get('idCurso');
            $idPlan = Session::get('idPlan');
            
            $usuario = DB::table('users')
            ->where('id', $idUsuario)
            ->update(['id_curso' => $idCurso,'id_plan' => $idPlan]);


            return view('Suscripcion.terminarPago', compact('result','tokenWs'));

        }else{
            // return view('Suscripcion.terminarPago', compact('result','tokenWs'));
           return redirect()->route('alumno');
        }

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
