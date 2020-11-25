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
.border-right {
    border-color: #bd9cd8 !important;
}
</style>
<div class="container-fluid px-0 bg-ce3 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-white mx-auto pl-5 overflow-hidden">
            <div class="text-white text-left py-5 px-4 my-5">
              <div class="cursodatacard">
                <h2 class="card-title h1-responsive pt-3 mb-2 animated lightSpeedIn slower color-ce0 font-weight-bold text-center">
                    <img class="card-img" src="{{ asset('public/img/REGLA_CORAZON.png') }}" style="width: 70px;margin-bottom: 1rem;" alt="regla corazon">
                    <strong>Casa educa</strong>
                </h2>
                <p class="mb-2 color-ce0 animated lightSpeedIn slower delay-3s text-center">Lorem ipsum dolor sit amet consectetur adipiscing elit litora</p>
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
                    <h3 class="card-title pr-2 color-ce3 text-center py-2 animated wow fadeInUp">¿Quiénes Somos?</h3>
                    <p class="card-text text-justify animated wow fadeInUp">Somos un matrimonio de profesionales del área de finanzas, economía, recursos humano y gestión de procesos productivos, con más de 20 años de experiencia profesional, a su vez de haber dado clases en universidades e institutos profesionales en dichas áreas.Que hace varios años hemos disfrutado la experiencia del educar a nuestros hijos bajo la modalidad de Homescholer, decidiéndonos a crear CasaEduca con el objetivo de permitir un desarrollo de esta actividad de educación a través de soluciones integrales a quienes la practican, otorgando un verdadero soporte personalizado para alumnos y apoderados.</p>                    
                    <p class="card-text text-justify animated wow fadeInUp">Durante estos años que hemos educado a nuestros hijos bajo la modalidad de exámenes libres, hemos adquirido una experiencia y conocimiento de las distintas etapas, tanto reglamentarias como académicas, que nos han servido para apoyar a otros padres, que en más de alguna ocasión nos impulsaron a desarrollar un plataforma educacional enfocada a padres y alumnos y alumnas Homescholer.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mb-5 pb-5 pt-5">
    <div class="row align-self-start">
        <div class="col-md-6 ">
            <div class="card w-100 border-right">
                <div class="card-body">
                    <h3 class="card-title pr-2 color-ce3 text-center py-2 animated wow fadeInUp">Nuestra Misión<img class="card-img"src="{{asset('public/img/002-marker.svg')}}" style="width: 40px;margin-bottom: 1rem; margin-left: 0.5rem;" alt="sombrero"></h3> 
                    <p class="card-text text-justify animated wow fadeInUp"><i>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</i></p>                    
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card w-100 border-right">
                <div class="card-body ">
                    <h3 class="card-title pr-2 color-ce3 text-center py-2 animated wow fadeInUp">Nuestra Visión<img class="card-img"src="{{asset('public/img/004-pen.svg')}}" style="width: 40px;margin-bottom: 1rem; margin-left: 0.5rem;" alt="sombrero"></h3>
                    <p class="card-text text-justify animated wow fadeInUp"><i>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</i></p>                    
                </div>
            </div>
        </div>

        <div class="col-md-12 my-4">
            <div class="d-flex justify-content-center">
                <img class="img-fluid animated wow fadeInUp" src="{{ asset('public/img/MANO_B.png') }}" style="width: 150px;" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
