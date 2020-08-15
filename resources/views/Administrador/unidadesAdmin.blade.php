@extends('Administrador.admin')

@section('content')
<h1 class="mt-4">Unidades</h1>
<br>

<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Asignatura</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Asignatura</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($unidades as $unidad)
            <tr>
                <td>{{$unidad->nombre}}</td>
                <td>{{$unidad->nombreAsignatura}}</td>
                
                <td class="text-center"><i class="fas fa-edit"></i></td>
                <td class="text-center"><i class="fas fa-trash-alt"></i></td>
            </tr>
            @endforeach
          
        </tbody>
    </table>
</div>



@endsection


