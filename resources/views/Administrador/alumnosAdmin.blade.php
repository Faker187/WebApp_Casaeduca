@extends('Administrador.admin')

@section('content')
<h1 class="mt-4">Alumnos</h1>
<br>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTableEsp" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Alumno</th>
                <th>Apoderado</th>
                <th>Curso</th>
                <th>Plan</th>
                <th>Email Apoderado</th>
                <th>Estado</th>
                <th>Comienzo Plan</th>
                <th>Fin Plan</th>
                {{-- <th>Editar</th>
                <th>Eliminar</th> --}}
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Alumno</th>
                <th>Apoderado</th>
                <th>Curso</th>
                <th>Plan</th>
                <th>Email Apoderado</th>
                <th>Estado</th>
                <th>Comienzo Plan</th>
                <th>Fin Plan</th>
                {{-- <th>Editar</th>
                <th>Eliminar</th> --}}
            </tr>
        </tfoot>
        <tbody>
            @foreach ($alumnos as $alumno)
            <tr>
                <td>{{$alumno->id}}</td>
                <td>{{$alumno->nombre}}</td>
                <td>{{$alumno->name_apoderado}}</td>
                <td>{{$alumno->nombreCurso}}</td>

                @if ($alumno->cantidadMeses == 1)
                    <td>{{$alumno->cantidadMeses}} Mes</td>
                @elseif($alumno->cantidadMeses == 'Plan borrado')
                    <td>{{$alumno->cantidadMeses}}</td>
                @else
                    <td>{{$alumno->cantidadMeses}} Meses</td>
                @endif
                <td>{{$alumno->email}}</td>

                @if ($alumno->estado == 1)
                <td>Activo</td>
                @else
                <td>Inactivo</td>
                @endif
                
                <td>{{$alumno->fecha_pago}}</td>
                <td>{{$alumno->fin_plan}}</td>
                {{-- <td class="text-center"><i class="fas fa-edit"></i></td>
                <td class="text-center"><i class="fas fa-trash-alt"></i></td> --}}
            </tr>
            @endforeach
          
        </tbody>
    </table>
</div>

@endsection


