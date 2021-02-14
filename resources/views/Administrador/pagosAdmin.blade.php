@extends('Administrador.admin')

@section('content')
<style>
.enMoney::before {
    content:"$";
}
.negMoney {
    color:red;
}
</style>
<h1 class="mt-4">Pagos</h1>
<br>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTableEsp" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Orden Compra</th>
                <th>ID Alumno</th>
                <th>Monto</th>
                <th>N° Tarjeta</th>
                <th>Fecha Transacción</th>
                <th>Codigo Comercio</th>
           
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Orden Compra</th>
                <th>ID Alumno</th>
                <th>Monto</th>
                <th>N° Tarjeta</th>
                <th>Fecha Transacción</th>
                <th>Codigo Comercio</th>
               
            </tr>
        </tfoot>
        <tbody>
            @foreach ($pagos as $pago)
            <tr>
                <td>{{$pago->idPago}}</td>
                <td>{{$pago->buyOrder}}</td>
                <td>{{$pago->idAlumno}}</td>
                <td><span class="enMoney"></span>{{$pago->amount}}</td>
                <td>{{$pago->cardNumber}}</td>
                <td>{{$pago->transactionDate}}</td>
                <td>{{$pago->commerceCode}}</td>
              
            </tr>
            @endforeach
          
        </tbody>
    </table>
</div>

@endsection


