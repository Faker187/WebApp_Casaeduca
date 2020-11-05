@extends('Administrador.admin')

@section('content')
<h1 class="mt-4">Profesores</h1>
<br>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTableEsp" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Alumno</th>
                <th>Profesor</th>
                <th>Asignatura</th>
                <th>Correo Profesor</th>
                <th>Asunto</th>
                <th>Mensaje</th>
                <th>Fecha</th>
                <th>Identificador</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Alumno</th>
                <th>Profesor</th>
                <th>Asignatura</th>
                <th>Correo Profesor</th>
                <th>Asunto</th>
                <th>Mensaje</th>
                <th>Fecha</th>
                <th>Identificador</th>
                <th>Tipo</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($correos as $correo)
            <tr>
                <td>{{$correo->nombreAlumno}}</td>
                <td>{{$correo->nombreProfesor}}</td>
                <td>{{$correo->nombreAsignatura}}</td>
                <td>{{$correo->correo}}</td>
                <td>{{$correo->asunto}}</td>
                <td>{{$correo->mensaje}}</td>
                <td>{{$correo->fecha}}</td>
                <td>{{$correo->token}}</td>
                @if ($correo->tipo == 1)
                <td>Pregunta</td>
                @else
                <td>Respuesta</td>
                @endif
                
            </tr>
            @endforeach
          
        </tbody>
    </table>
</div>

<br>






@endsection


