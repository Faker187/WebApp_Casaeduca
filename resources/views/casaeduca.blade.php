@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #F4A6B8 !important;
    }
</style>
<div class="container">
<!-- ====== Casaeduca ====== -->
<div class="row justify-content-center mt-5">
    <div class="col-md-12">
        <h1 class="h1-responsive text-center text-white">
        <img class="card-img" src="{{ asset('public/img/REGLA_CORAZON.png') }}" style="width: 70px;margin-bottom: 1rem;" alt="regla corazon">
        Casa Educa
        </h1>
        <hr class="my-5"> 
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <img class="card-img" src="{{ asset('public/img/casaeduca1.jpg') }}" alt="casa educa 1">
    </div>
    <div class="col-md-4">
        <img class="card-img" src="{{ asset('public/img/casaeduca2.jpg') }}" alt="casa educa 2">
    </div>
    <div class="col-md-4">
        <img class="card-img" src="{{ asset('public/img/casaeduca3.jpg') }}" alt="casa educa 3">
    </div>
</div>

<div class="row">
    <div class="col-md-12 my-5">
       <p class="lead text-white">Somos un matrimonio de profesionales del área de finanzas, economía, recursos humano y gestión de procesos productivos, con más de 20 años de experiencia profesional, a su vez de haber dado clases en universidades e institutos profesionales en dichas áreas.Que hace varios años hemos disfrutado la experiencia del educar a nuestros hijos bajo la modalidad de Homescholer, decidiéndonos a crear CasaEduca con el objetivo de permitir un desarrollo de esta actividad de educación a través de soluciones integrales a quienes la practican, otorgando un verdadero soporte personalizado para alumnos y apoderados.</p>
       <br>
       <p class="lead text-white">Durante estos años que hemos educado a nuestros hijos bajo la modalidad de exámenes libres, hemos adquirido una experiencia y conocimiento de las distintas etapas, tanto reglamentarias como académicas, que nos han servido para apoyar a otros padres, que en más de alguna ocasión nos impulsaron a desarrollar un plataforma educacional enfocada a padres y alumnos y alumnas Homescholer.</p>
    </div>
</div>
<div class="row justify-content-center">
    <img class="card-img" style="width: 120px;margin-bottom: 1rem;" src="{{ asset('public/img/MANOS_C.png') }}" alt="manos 3">
</div>
<!-- ====== /Casaeduca ====== -->
</div>
@endsection