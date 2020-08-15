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
      
        <!-- Card group -->
        <div class="card-group">

            @foreach ($asignaturas as $asignatura)

            <!-- Card -->
              <div class="card mb-4 m-2">

                <div class="view overlay">
                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg"
                        alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <div class="card-body">
                    <h4 class="card-title">{{$asignatura->nombre}}</h4>
                    <a class="btn btn-primary btn-lg btn-block" href="/Asignatura/{{$asignatura->idasignatura}}">Ir a la clase</a>
                </div>

            </div>
            <!-- Card -->
                
            @endforeach

        </div>
        <!-- Card group -->

    </div>

</div>
@endsection