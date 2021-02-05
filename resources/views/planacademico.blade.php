@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #fff !important;
    }
</style>
<div class="container-fluid px-0 bg-ce5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-white mx-auto pl-5">
            <div class="text-white text-left py-5 px-4 my-5">
              <div class="cursodatacard">
                <h2 class="card-title h1-responsive pt-3 mb-2 font-bold color-ce0 text-center">
                    <img class="card-img" src="{{ asset('public/img/009-certification.svg') }}" style="width: 70px;margin-bottom: 1rem;" alt="regla corazon">
                    <strong>Plan Académico</strong>
                </h2>
                <p class="mb-2 color-ce0 text-center">{!!$planAcademicoSubtitulo!!}</p>
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
                    <h3 class="card-title pr-2 color-ce0 text-center py-2 animated wow fadeInUp"><img class="card-img" src="{{ asset('public/img/LIBROS.png') }}" style="width: 100px;" alt="libros plan academico">Nuestro Proyecto Educativo</h3>
                    <p class="card-text text-justify">{!!$planAcademicoNuestroProEducativo!!}</p>                    
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
                    <h3 class="card-title pr-2 color-ce0 text-center py-2 animated wow fadeInUp"><img class="card-img mt-0 mb-5" src="{{ asset('public/img/011-light-bulb.svg') }}" style="width: 60px;" alt="">¿Qué es importante tener presente?</h3>
                    <p class="card-text text-justify">
                        A pesar de que las personalidades y la actitud de los niños de hoy no es la misma de hace 20 años, puesto que, entre otras cosas ahora cuentan con un acceso mucho más ilimitado a la información, lo que los hace manejar diversos temas y parecer mayores, lo cierto es que siguen siendo individuos en etapa de
                        crecimiento, que se ven afectados por las situaciones que les tocó vivir, como también se le presentaron a nosotros en generaciones anteriores.
                    </p>    
                    <p class="card-text text-justify">
                        Todos los cursos impares suelen ser más complejos para los alumnos, porque principalmente se inicia con contenido académico nuevo. Durante los años pares, generalmente se refuerzan los contenidos ya entregados.
                    </p>  
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card w-100 border-0">
                <div class="card-body border-right">
                    <h3 class="card-title pr-2 color-ce0 text-center py-2 animated wow fadeInUp"><img class="card-img mt-0 mb-5 pr-2" src="{{ asset('public/img/050-school-bell.png') }}" style="width: 60px;" alt="">Suscripción Mensual</h3>
                    <p class="card-text text-justify">{!!$planAcademicoSuscripcionMensual!!}</p>                    
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card w-100 border-0">
                <div class="card-body">
                    <h3 class="card-title pr-2 color-ce0 text-center py-2 animated wow fadeInUp"><img class="card-img mt-0 mb-5 pr-2" src="{{ asset('public/img/profesora.svg') }}" style="width: 60px;" alt="">Soporte Educacional</h3>
                    <p class="card-text text-justify">{!!$planAcademicoSoporteEducacional!!}</p>                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card w-100 border-0">
                <div class="card-body">
                    <h3 class="card-title pr-2 color-ce0 text-center py-2 animated wow fadeInUp"><img class="card-img mt-0 mb-5 pr-2" src="{{ asset('public/img/008-blackboard.svg') }}" style="width: 60px;" alt="">Descripción</h3>
                    <div class="row">
                        <div >
                            <p class="card-text text-justify">{!! $planAcademicoDescripcion !!}</p>  
                        </div>
                        {{-- <div class="col-md-6">
                            <p class="card-text text-justify">Los objetivos particulares de aprendizaje a su vez contarán con un objetivo general y cuatro unidades temáticas con el contenido en detalle a desarrollar, que a su vez tendrán contenido teórico, guías, ejercicios y pruebas.</p>                  
                        </div> --}}
                    </div>   
                </div>
            </div>
        </div>

        <div class="col-md-12 mb-5">
            <div class="d-flex justify-content-center">
                <img class="img-fluid animated wow fadeInUp" src="{{ asset('public/img/MANO_B.png') }}" style="width: 150px;" alt="">
            </div>
        </div>
    </div>
</div>
@endsection

