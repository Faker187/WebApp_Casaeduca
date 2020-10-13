@extends('layouts.app')

@section('content')
<style>
.manos{
    float: right;
    display: flex;
    position: relative;
    z-index: -1;
    right: 20%;
    opacity: 0.6;
}
.slash-1 {
    height: 10px;
    color: #bd9cd8;
    background-image: linear-gradient(-45deg,
        transparent,
        transparent 25%,
        currentColor 25%,
        currentColor 50%,
        transparent 50%,
        transparent 75%,
        currentColor 75%);
        background-size: 10px 10px;
        width: 100%;
    }
</style>
<div class="container-fluid px-0 bg-ce7 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-white mx-auto pl-5">
            <div class="text-white text-left py-5 px-4 my-5">
              <div class="cursodatacard">
                <h2 class="card-title h1-responsive pt-3 mb-2 font-bold color-ce0 text-center">
                    <img class="card-img" src="{{ asset('img/REGLA_CORAZON.png') }}" style="width: 70px;margin-bottom: 1rem;" alt="regla corazon">
                    <strong>Casa educa</strong>
                </h2>
                <p class="mb-2 color-ce0 text-center">Lorem ipsum dolor sit amet consectetur adipiscing elit litora</p>
                <br>
                <br>
                <br>
              </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card w-100 border-0">
                <div class="card-body">
                    <h3 class="card-title pr-2 color-ce3 text-center py-2">¿Quiénes Somos?</h3>
                    <p class="card-text text-justify">Somos un matrimonio de profesionales del área de finanzas, economía, recursos humano y gestión de procesos productivos, con más de 20 años de experiencia profesional, a su vez de haber dado clases en universidades e institutos profesionales en dichas áreas.Que hace varios años hemos disfrutado la experiencia del educar a nuestros hijos bajo la modalidad de Homescholer, decidiéndonos a crear CasaEduca con el objetivo de permitir un desarrollo de esta actividad de educación a través de soluciones integrales a quienes la practican, otorgando un verdadero soporte personalizado para alumnos y apoderados.</p>                    
                    <p class="card-text text-justify">Durante estos años que hemos educado a nuestros hijos bajo la modalidad de exámenes libres, hemos adquirido una experiencia y conocimiento de las distintas etapas, tanto reglamentarias como académicas, que nos han servido para apoyar a otros padres, que en más de alguna ocasión nos impulsaron a desarrollar un plataforma educacional enfocada a padres y alumnos y alumnas Homescholer.</p>
                </div>
            </div>
        </div>
    </div>
    
</div>
<hr class="slash-1">
<div class="container mb-5 pb-5">
    <div class="row align-self-start">
        <div class="col-md-6 ">
            <div class="card w-100 border-0">
                <div class="card-body">
                    <h3 class="card-title pr-2 color-ce3 text-center py-2">Nuestra Misión<img class="card-img"src="{{asset('img/002-marker.svg')}}" style="width: 40px;margin-bottom: 1rem; margin-left: 0.5rem;" alt="sombrero"></h3> 
                    <p class="card-text text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>                    
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card w-100 border-0">
                <div class="card-body">
                    <h3 class="card-title pr-2 color-ce3 text-center py-2">Nuestra Visión<img class="card-img"src="{{asset('img/004-pen.svg')}}" style="width: 40px;margin-bottom: 1rem; margin-left: 0.5rem;" alt="sombrero"></h3>
                    <p class="card-text text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>                    
                </div>
            </div>
        </div>
    </div>
    
</div>

<div class="container">
    <div class="row align-self-end">

    </div>
    
</div>
@endsection