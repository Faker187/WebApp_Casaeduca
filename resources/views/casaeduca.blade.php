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
<div class="container-fluid px-0 bg-ce2 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-white pl-5">
            <div class="text-white text-left py-5 px-4 my-5">
              <div class="cursodatacard">
                <h2 class="card-title h1-responsive pt-3 mb-2 font-bold color-ce0 text-center">
                    <strong>Casa Educa</strong>
                </h2>
              </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
<!-- ====== Casaeduca ====== -->
<div class="row justify-content-center mt-5">
    <div class="col-md-12">
    </div>
</div>

<div class="row">
    <div class="col-md-12 my-2">
        <h3>¿Quíenes somos? </h3>
            <p class="lead" style="text-align: justify;">Somos un matrimonio de profesionales del área de finanzas, economía, recursos humano y gestión de procesos productivos, con más de 20 años de experiencia profesional, a su vez de haber dado clases en universidades e institutos profesionales en dichas áreas,
                que hace varios años hemos disfrutado la experiencia de educar a nuestros hijos bajo la modalidad de Homescholer,
                decidiéndonos a crear CasaEduca con el objetivo de permitir un desarrollo de esta actividad de educación a través de soluciones integrales a quienes la practican, 
                otorgando un verdadero soporte personalizado para alumnos y apoderados.
                Durante estos años que hemos educado a nuestros hijos bajo la modalidad de exámenes libres,
                hemos adquirido una experiencia y conocimiento de las distintas etapas, tanto reglamentarias como académicas, 
                que nos han servido para apoyar a otros padres, que en más de alguna ocasión nos impulsaron a desarrollar un plataforma educacional enfocada a padres
                y alumnos y alumnas Homescholer.</p>
    </div>
</div>
<div class="row">
    <div class="col-md-12 my-2">
        <h3>Nuestra Misión</h3>
        <p class="lead" style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
        when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
        It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
    </div>
</div>
<!-- ====== /Casaeduca ====== -->
</div>
@endsection