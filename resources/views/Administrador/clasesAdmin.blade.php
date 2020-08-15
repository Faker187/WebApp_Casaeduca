@extends('Administrador.admin')

@section('content')
<h1 class="mt-4">Clases</h1>
<br>

<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Unidad</th>
                <th>Asignatura</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Unidad</th>
                <th>Asignatura</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($clases as $clase)
            <tr>
                <td>{{$clase->nombre}}</td>
                <td>{{$clase->nombreUnidad}}</td>
                <td>{{$clase->nombreAsignatura}}</td>
                
                <td class="text-center"><i class="fas fa-edit"></i></td>
                <td class="text-center"><i class="fas fa-trash-alt"></i></td>
            </tr>
            @endforeach
          
        </tbody>
    </table>
</div>



@endsection


