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
@endsection