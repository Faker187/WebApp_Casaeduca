@extends('layouts.app')

@section('content')
@php
$nombreAlumno = Auth::user()->name;
$curso = Auth::user()->id_curso;
$nombreApoderado = Auth::user()->name_apoderado;

if (Auth::user()->estado == 1) {
  $estado = 'Activo';
}else{
  $estado = 'Inactivo';
}

switch ($curso) {
  case '1':
    $curso = 'Primero Básico';
    break;
  case '2':
    $curso = 'Segundo Básico';
    break;
  case '3':
    $curso = 'Tercero Básico';
    break;
  case '4':
    $curso = 'Cuarto Básico';
    break;
  case '5':
    $curso = 'Quinto Básico';
    break;
  case '6':
    $curso = 'Sexto Básico';
    break;
  case '7':
    $curso = 'Séptimo Básico';
    break;
  case '8':
    $curso = 'Octavo Básico';
    break;
  
  default:
    # code...
    break;
}
@endphp
<div class="container color-ce4">
    {{-- {{dd(Auth::user())}} --}}
    <div class="jumbotron">
        <h2 class="card-title h1-responsive pt-3 mb-2 font-bold color-ce4">
          <strong>Hola {{$nombreApoderado}}</strong>
        </h2>
        <br>
        <p>Soy Apoderado/a de:</p>
        <br>
        <!-- Card LENGUAJE -->
        <div class="col-md-4">
          <div class="card mb-4 m-1">
              <div class="view overlay">
                  {{-- <img class="card-img-top" src="{{ asset('public/img/lenguaje.png') }}"
                      alt="Card image cap">
                  <a href="#!">
                      <div class="mask rgba-white-slight"></div>
                  </a> --}}
              </div>
              <div class="card-body danger-color">
                  <div class="d-flex">
                      <h4 class="card-title text-white">{{$nombreAlumno}}</h4>
                  </div>
                  <div class="d-flex mb-3">
                      <div class="mr-auto p-2">
                          <a class="btnce-1 text-white font-weight-bold" href="#">{{$curso}}</a>
                      </div>
                      <div class="p-2"><a class="btnce-1 text-white font-weight-bold" href="#">{{$estado}}</a></div>
                  </div>

                  <div class="d-flex mb-3">
                    <div class="mr-auto p-2">
                        <a class="btnce-1 text-white font-weight-bold" href="#">Plan:</a>
                    </div>
                    <div class="p-2"><a class="btnce-1 text-white font-weight-bold" href="#">3 Meses</a></div>
                </div>

                  <div class="d-flex mb-3">
                    <div class="mr-auto p-2">
                        <a class="btnce-1 text-white font-weight-bold" href="#">Fecha término:</a>
                    </div>
                    <div class="p-2"><a class="btnce-1 text-white font-weight-bold" href="#">{{Auth::user()->fin_plan}}</a></div>
                </div>

                  {{-- <div class="jqmeter-container" title="Progreso de asignatura"></div> --}}
                  <br>
                  <a type="button" href="/Alumno/{{Auth::user()->id}}" class="btn btn-block btn-primary">Comenzar a estudiar!</a>

              </div>
          </div>
      </div>


      {{-- ---------------------------------------------------------------------------------------------- --}}
        {{-- <h2 class="display-4">Hola {{$nombreAlumno}}</h2> --}}
        {{-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p> --}}
        {{-- @switch($curso)
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

    </div> --}}

{{-- 

  
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



        </div>
       
      </div>
    </div>
  </div>


</div> --}}
@endsection