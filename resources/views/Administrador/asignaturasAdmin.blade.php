@extends('Administrador.admin')

@section('content')
<h1 class="mt-4">Asignaturas</h1>
<br>

<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Curso</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Curso</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($asignaturas as $asignatura)
            <tr>
                <td>{{$asignatura->nombre}}</td>
                @switch($asignatura->idcurso)
                @case(1)
                <td>Primero Básico</td>
                    @break
                @case(2)
                <td>Segundo Básico</td>
                    @break
                @case(3)
                <td>Tercero Básico</td>
                    @break
                @case(4)
                <td>Cuarto Básico</td>
                    @break
                @case(5)
                <td>Quinto Básico</td>
                    @break
                @case(6)
                <td>Sexto Básico</td>
                    @break
                @case(7)
                <td>Séptimo Básico</td>
                    @break
                @case(8)
                <td>Octavo Básico</td>
                    @break
                @default
                    
            @endswitch
                <td class="text-center"><i class="fas fa-edit"></i></td>
                <td class="text-center"><i class="fas fa-trash-alt"></i></td>
            </tr>
            @endforeach
          
        </tbody>
    </table>
</div>



@endsection


