<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Alumno;
use App\Plan;
use App\Pago;
use App\Sitio;
use Auth;
use DB;
use Session;
use Transbank\Webpay\Configuration;
use Transbank\Webpay\Webpay;
// use Transbank\Webpay\WebpayPlus\Transaction;




class SuscripcionController extends Controller
{
    public function suscribirse()
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

        return view('Suscripcion.suscribete', compact('eslogan','invitacionPlanAcademico','sobreNosotros','direccion',
        'telefono','email','facebook','twitter','instagram','whatsapp'));
    }


    public function agregarAlumno (Request $request)
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

        return view('Suscripcion.agregarAlumno',compact('eslogan','invitacionPlanAcademico','sobreNosotros','direccion',
        'telefono','email','facebook','twitter','instagram','whatsapp'));
    }

    public function obtenerPlanes($idCurso)
    {
        $planes = DB::table('plan')->where('id_curso' , $idCurso)->get();
        return view('Suscripcion.planes' , compact('planes'));
    }

    public function crearSuscripcion(Request $request)
    {
        $user = User::all()->where('email', $request->email)->first();

        if (!$user) {

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

                //Se crea el nuevo Usuario
                User::create([
                    'name' => $request->nombreCompletoApoderado,
                    // 'name_apoderado' => $request->nombreCompletoApoderado,
                    // 'genero' => $request->genero,
                    // 'id_curso' => $request->curso,
                    // 'id_plan' => $request->plan,
                    'email' => $request->email,
                    'password' => \Hash::make($request->password),
                    'tipo' => 1, //0 es admin 2 es profesor
                    // 'fecha_pago' => $fechaActual,
                    // 'fin_plan' => $fin_plan,
                    'estado' => 0
                ]);
    
                 return view('Suscripcion.suscripcionRealizada',compact('eslogan','invitacionPlanAcademico','sobreNosotros','direccion',
                 'telefono','email','facebook','twitter','instagram','whatsapp')); //invitar a loguear junto con el mensaje de felicitaciones
        
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

        $monto = DB::table('plan')->where('idplan' , $request->idPlan)->first()->precio;

        // //Subir a sesión que curso y plan eligió, una vez procesado el pago se le asignará curso y plan en bd
        $idPlan = $request->idPlan;
        $idCurso = DB::table('plan')->where('idplan' , $idPlan)->first()->id_curso;
 
        Session::forget('idCurso');
        Session::forget('idPlan');
        Session::put('idCurso', $idCurso);
        Session::put('idPlan', $idPlan);

        $sessionId = Session::getId();

        $buyOrder = strval(rand(100000, 999999999));
        $returnUrl = 'https://casaeduca.cl/finalizarPago';
        $finalUrl = 'https://casaeduca.cl/volver';
        $initResult = $transaction->initTransaction(
                $monto, $buyOrder, $sessionId, $returnUrl, $finalUrl);

        $formAction = $initResult->url;
        $tokenWs = $initResult->token;

        return view('Suscripcion.pagarPlan',compact('formAction','tokenWs'));
    }

    public function procesarRenovacion(Request $request)
    {
        $transaction = (new Webpay(Configuration::forTestingWebpayPlusNormal()))
        ->getNormalTransaction();

        $monto = DB::table('plan')->where('idplan' , $request->idPlan)->first()->precio;

         // //Subir a sesión que curso y plan eligió, una vez procesado el pago se le asignará curso y plan en bd
         $idPlan = $request->idPlan;
         $idAlumno = $request->idAlumno;
         $idCurso = DB::table('plan')->where('idplan' , $idPlan)->first()->id_curso;
  
         Session::forget('idCurso');
         Session::forget('idPlan');
         Session::forget('idAlumno');
         Session::put('idCurso', $idCurso);
         Session::put('idPlan', $idPlan);
         Session::put('idAlumno', $idAlumno);
 
         $sessionId = Session::getId();
 
         $buyOrder = strval(rand(100000, 999999999));
         $returnUrl = 'https://casaeduca.cl/renovarPlanPago';
         $finalUrl = 'https://casaeduca.cl/volver';
         $initResult = $transaction->initTransaction(
                 $monto, $buyOrder, $sessionId, $returnUrl, $finalUrl);
 
         $formAction = $initResult->url;
         $tokenWs = $initResult->token;
 
         return view('Suscripcion.pagarRenovacionPlan',compact('formAction','tokenWs'));
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
            $idApoderado = Auth::id();

            $pago = new Pago;
            $pago->buyOrder = $result->buyOrder;
            $pago->idApoderado = $idApoderado;
            $pago->amount = $output->amount;
            $pago->cardNumber = $result->cardDetail->cardNumber;
            $pago->transactionDate = $result->transactionDate;
            $pago->commerceCode = $output->commerceCode;
            $pago->save();

            $idCurso = Session::get('idCurso');
            $idPlan = Session::get('idPlan');
         
            $query = DB::table('plan')->where('idplan' , $idPlan)->first();
            // dd($query);
          
            $meses = $query->cantidad_meses;
         
          
            // se realiza el pago y parte desde hoy
            $fechaActualm = date("Y-m-d H:i:s");

            $fechaActual =  date('Y-m-d H:i:s',strtotime('-3 hour',strtotime($fechaActualm)));

            // y termina en la cantidad de meses seleccionada
            $fin_plan = date('Y-m-d', strtotime("+".$meses." months", strtotime($fechaActual)));
                  
          
            $alumno = new Alumno;
            $alumno->nombre = 'Estudiante';
            $alumno->id_curso = $idCurso;
            $alumno->id_apoderado = $idApoderado;
            $alumno->estado = 1;
            $alumno->fecha_pago = $fechaActual;
            $alumno->fin_plan = $fin_plan;
            $alumno->id_plan = $idPlan;
            $alumno->save();

            return view('Suscripcion.terminarPago', compact('result','tokenWs'));

        }else{
            // return view('Suscripcion.terminarPago', compact('result','tokenWs'));
           return redirect()->route('apoderado');
        }

    }

    public function renovarPlanPago(Request $request)
    {
        $transaction = (new Webpay(Configuration::forTestingWebpayPlusNormal()))
        ->getNormalTransaction();

        $tokenWs = filter_input(INPUT_POST, 'token_ws');
        $result = $transaction->getTransactionResult($request->input("token_ws"));
        $output = $result->detailOutput;

        if ($output->responseCode == 0) {
            
            // Transaccion exitosa, puedes procesar el resultado con el contenido de
            // las variables result y output.
            $idApoderado = Auth::id();

            $pago = new Pago;
            $pago->buyOrder = $result->buyOrder;
            $pago->idApoderado = $idApoderado;
            $pago->amount = $output->amount;
            $pago->cardNumber = $result->cardDetail->cardNumber;
            $pago->transactionDate = $result->transactionDate;
            $pago->commerceCode = $output->commerceCode;
            $pago->save();

            $idCurso = Session::get('idCurso');
            $idPlan = Session::get('idPlan');
            $idAlumno = Session::get('idAlumno');
         
            $query = DB::table('plan')->where('idplan' , $idPlan)->first();
          
            $meses = $query->cantidad_meses;
         
          
            // se realiza el pago y parte desde hoy
            $fechaActual = date("Y-m-d");
            // y termina en la cantidad de meses seleccionada
            $fin_plan = date('Y-m-d', strtotime("+".$meses." months", strtotime($fechaActual)));
      
            
            $alumno = Alumno::find($idAlumno);
            $alumno->estado = 1;
            $alumno->fecha_pago = $fechaActual;
            $alumno->fin_plan = $fin_plan;
            $alumno->id_plan = $idPlan;
            $alumno->save();


            return view('Suscripcion.terminarPago', compact('result','tokenWs'));

        }else{
            // return view('Suscripcion.terminarPago', compact('result','tokenWs'));
           return redirect()->route('apoderado');
        }
    }

    public function volver(Request $request)
    {
        return redirect()->route('apoderado');
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
