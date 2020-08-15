@extends('Administrador.admin')

@section('content')
<h1 class="mt-4">Alumnos</h1>
<br>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Alumno</th>
                <th>Apoderado</th>
                <th>Curso</th>
                <th>Plan</th>
                <th>Email</th>
                <th>Estado</th>
                <th>Comienzo Plan</th>
                <th>Fin Plan</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Alumno</th>
                <th>Apoderado</th>
                <th>Curso</th>
                <th>Plan</th>
                <th>Email</th>
                <th>Estado</th>
                <th>Comienzo Plan</th>
                <th>Fin Plan</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($alumnos as $alumno)
            <tr>
                <td>{{$alumno->name}}</td>
                <td>{{$alumno->name_apoderado}}</td>
                @switch($alumno->id_curso)
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

                @switch($alumno->id_plan)
                    @case(1)
                    <td>1 Mes</td>
                        @break
                    @case(2)
                    <td>2 Meses</td>
                        @break
                    @case(3)
                    <td>3 Meses</td>
                        @break
                    @default
                        
                @endswitch
                <td>{{$alumno->email}}</td>

                @if ($alumno->estado == 1)
                <td>Activo</td>
                @else
                <td>Inactivo</td>
                @endif
                
                <td>{{$alumno->fecha_pago}}</td>
                <td>{{$alumno->fin_plan}}</td>
                <td class="text-center"><i class="fas fa-edit"></i></td>
                <td class="text-center"><i class="fas fa-trash-alt"></i></td>
            </tr>
            @endforeach
          
        </tbody>
    </table>
</div>

@endsection


