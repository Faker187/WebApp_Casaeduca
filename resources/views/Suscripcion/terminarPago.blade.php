@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card border-0 mx-5 my-5 p-5 color-ce0 text-center">
        <div class="card-body">
          <h1 class="display-4 h5 orange-text"><img width="200" src="{{ asset('public/img/verif.png') }}"/> Pago Autorizado</h1>
          <h2 class="display-3 h2 my-4 py-2">Detalle de compra</h2>
          <div class="table-responsive-sm">
            <table class="table">
                <tr>
                    <td>Fecha</td>
                    <td>{{$response->transactionDate}}</td>
                </tr>
                <tr>
                    <td>Codigo de compra</td>
                    <td>{{$response->buyOrder}}</td>
                </tr>
                <tr>
                    <td>Monto</td>
                    <td>$ {{$response->amount}}</td>
                </tr>
                <tr>
                    <td>Tipo de pago</td>
                    @switch($response->paymentTypeCode)
                        @case('VN')
                            <td>Venta Normal</td>
                            @break

                        @case('VD')
                            <td>Venta Débito</td>
                            @break

                        @case('VC')
                            <td>Venta en cuotas</td>
                            @break

                        @case('SI')
                            <td>3 cuotas sin interés</td>
                            @break
                        
                        @case('S2')
                            <td>2 cuotas sin interés</td>
                            @break

                        @case('NC')
                            <td>N Cuotas sin interés</td>
                            @break

                        @case('VP')
                            <td>Venta Prepago</td>
                            @break

                        @default
                            <td>Venta</td>
                    @endswitch
                </tr>
            </table>
          </div>
          <p class="lead mb-4 pb-2 px-md-5 mx-md-5">Volver a Casa Educa, <a class="badge bg-ce1" href="/Apoderado"><i class="fas fa-clone left"></i> Aquí</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection