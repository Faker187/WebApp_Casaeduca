@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #fff !important;
        
    }
    .carousel-inner img {
    width: 100%;
    max-height: 460px;
    }

    .carousel-inner{
    width: 600px; 
    height: 600px; 
    cursor: pointer; 
    opacity: 1; 
    background-repeat: no-repeat; 
    background-position: 50% center;
    }
    hr.style1{
	border-top: 1px solid #8c8b8b;
    }

</style>
<div class="container">
<!-- ====== Casaeduca ====== -->
<div class="row justify-content-center mt-5">
    <div class="col-md-12">
        <h1 class="h1-responsive text-center">
            <img class="card-img" src="{{ asset('img/escuela.svg') }}" style="width: 50px;margin-bottom: 1rem;color: black;" alt="escuela">
            Bienvenidos a Casa Educa
            <img class="card-img" src="{{ asset('img/escuela.svg') }}" style="width: 50px;margin-bottom: 1rem;color: black;" alt="escuela">
        </h1>
        <hr class="style1">
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <img class="card-img" src="{{ asset('img/profesor.jpg') }}" alt="casa educa 1">
    </div>
    <div class="col-md-6" style="vertical-align:middle;">
        <h2 class="h2-responsive medio">Directora Patricia López</h2>
    </div>
    <div class="col-md-2">

    </div>
</div>

<div class="row">
    <div class="col-md-12 my-5">
        <h3>Misión 
            <img class="card-img" style="width: 70px;margin-bottom: 1rem;" src="{{ asset('img/MANOS_C.png') }}" alt="manos">
        </h3>
       <p class="lead" style="text-align: justify;">Somos un matrimonio de profesionales del área de finanzas, economía, recursos humano y gestión de procesos productivos, con más de 20 años de experiencia profesional, a su vez de haber dado clases en universidades e institutos profesionales en dichas áreas.Que hace varios años hemos disfrutado la experiencia del educar a nuestros hijos bajo la modalidad de Homescholer, decidiéndonos a crear CasaEduca con el objetivo de permitir un desarrollo de esta actividad de educación a través de soluciones integrales a quienes la practican, otorgando un verdadero soporte personalizado para alumnos y apoderados.</p>
       <br>
       <h3 style="text-align: right;">
       <img class="card-img" style="width: 70px;margin-bottom: 1rem; margin-right:05.rem;" src="{{ asset('img/MANO_A.png') }}" alt="manos">
       Visión</h3>
       <p class="lead" style="text-align: justify;">Durante estos años que hemos educado a nuestros hijos bajo la modalidad de exámenes libres, hemos adquirido una experiencia y conocimiento de las distintas etapas, tanto reglamentarias como académicas, que nos han servido para apoyar a otros padres, que en más de alguna ocasión nos impulsaron a desarrollar un plataforma educacional enfocada a padres y alumnos y alumnas Homescholer.</p>
    </div>
</div>
<div class="row justify-content-center">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner overlay">
        <div class="carousel-item active ">
            <img src="{{ asset('img/nino-leyendo.jpg') }}" class="d-block w-100" alt="estudio">
        </div>
        <div class="carousel-item">
        <img src="{{ asset('img/ninos-leyendo-1.jpg') }}" class="d-block w-100" alt="estudio1">
        </div>
        <div class="carousel-item">
        <img src="{{ asset('img/nina-estudiando.jpg') }}" class="d-block w-100" alt="estudio2">
        </div>
        <div class="carousel-item">
        <img src="{{ asset('img/ninos-leyendo.jpg') }}" class="d-block w-100" alt="estudio2">
        </div>
        <div class="carousel-item">
        <img src="{{ asset('img/nina-estudiando-1.jpg') }}" class="d-block w-100" alt="estudio2">
        </div>
    </div>
    </div>
</div>
<!-- ====== /Casaeduca ====== -->
</div>
@endsection