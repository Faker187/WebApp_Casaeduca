@extends('Administrador.admin')

@section('content')
<h1 class="mt-4">Profesores</h1>
<br>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($profesores as $profesor)
            <tr>
                <td>{{$alumno->name}}</td>
                <td>{{$alumno->email}}</td>
                <td class="text-center"><i class="fas fa-edit"></i></td>
                <td class="text-center"><i class="fas fa-trash-alt"></i></td>
            </tr>
            @endforeach
          
        </tbody>
    </table>
</div>

@endsection


