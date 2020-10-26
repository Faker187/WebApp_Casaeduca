@extends('layouts.app')

@section('content')
@php
$nombreAlumno = Auth::user()->name;
$curso = Auth::user()->id_curso;
$nombreApoderado = Auth::user()->name_apoderado;
@endphp
<div class="container">
    {{-- {{dd(Auth::user())}} --}}
    <div class="jumbotron">
        <h2 class="display-4">Hola {{$nombreAlumno}}</h2>
        {{-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p> --}}
        @switch($curso)
        @case(1)
        <p>Curso: Primero Básico</p>
        @break
        @case(2)
        <p>Curso: Segundo Básico</p>
        @break
        @case(3)
        <p>Curso: Tercero Básico</p>
        @break
        @case(4)
        <p>Curso: Cuarto Básico</p>
        @break
        @case(5)
        <p>Curso: Quinto Básico</p>
        @break
        @case(6)
        <p>Curso: Sexto Básico</p>
        @break
        @case(7)
        <p>Curso: Séptimo Básico</p>
        @break
        @case(8)
        <p>Curso: Octavo Básico</p>
        @break
        @default

        @endswitch
        <p>Nombre Apoderado: {{$nombreApoderado}}</p>

        <hr class="my-4">
        <p>Tus asignaturas disponibles son:</p>


        <ul class="list-group">

            @foreach ($asignaturas as $asignatura)
           
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$asignatura->nombre}} | {{$asignatura->nombreProfesor ? $asignatura->nombreProfesor : 'No asignado'}}
           
                <span>
                    <a class="btn btn-primary btn btn-block mb-1" href="/Asignatura/{{$asignatura->idasignatura}}">Ir a la clase</a>
                    @if ($asignatura->nombreProfesor != null)
                    <a class="contactarProfesor btn btn-primary btn btn-block" 
                     idProfesor="{{$asignatura->idprofesor}}"
                     idAsignatura="{{$asignatura->idasignatura}}">
                     Contactar Profesor
                    </a>
                    @endif
               
                </span>
                </li>
            @endforeach
          </ul>

    </div>



  
  <!-- Modal -->
  <div class="modal fade" id="contactarProfesorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Contactar Profesor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div id="modalBodyContactarProfesor" class="modal-body">
          {{-- ... --}}
        </div>
       
      </div>
    </div>
  </div>


</div>
@endsection