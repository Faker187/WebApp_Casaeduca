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
                    <h3 class="card-title pr-2 color-ce0 text-center py-2 animated wow fadeInUp"><img class="card-img" src="{{ asset('public/img/LIBROS.png') }}" style="width: 100px;" alt="libros plan academico">Nuestro Proyecto Educativo</h3>
                    <p class="card-text text-justify">Esta orientado hacia los alumnos de enseñanza básica, con una clara orientación a la preparación de exámenes libres, de acuerdo a lo dispuesto en los planes y programas oficiales del Ministerio de educación vigentes para los respectivos cursos y niveles, con propósitos definidos, articulados para asegurar una adecuada trayectoria educativa entre sí y correlacionado con la etapa de vida de los alumnos entre los 6 y 13 años.</p>                    
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
                    <p class="card-text text-justify"><img class="card-img mt-0 mb-5" src="{{ asset('public/img/FLECHAS1.png') }}" alt="primero blog"></p>                    
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
                    <h3 class="card-title pr-2 color-ce0 text-center py-2 animated wow fadeInUp"><img class="card-img mt-0 mb-5 pr-2" src="{{ asset('public/img/050-school-bell.png') }}" style="width: 60px;" alt="">Supcripción Mensual</h3>
                    <p class="card-text text-justify">Nuestra suscripción permitirá acceder a todo nuestro contenido en forma permanente 24/7 ​Las clases on line y los chats deberàn ser programados en horario  de 9 a 18 horas de lunes a viernes.</p>                    
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card w-100 border-0">
                <div class="card-body">
                    <h3 class="card-title pr-2 color-ce0 text-center py-2 animated wow fadeInUp"><img class="card-img mt-0 mb-5 pr-2" src="{{ asset('public/img/profesora.svg') }}" style="width: 60px;" alt="">Soporte Educacional</h3>
                    <p class="card-text text-justify">Casa Educa diseñará un programa personalizado de estudio que además incluirá 2 clase on line y 8 chats mensuales, como apoyo adicional a la resolución de problemas y solución de dudas.</p>                    
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
                        <div class="col-md-6">
                            <p class="card-text text-justify">Cada curso constará de un objetivo general a lograr y objetivos particulares de aprendizaje en Lenguaje y Comunicación, Matemáticas, Ciencias Naturales e Historia, Geografía y Ciencias Sociales, y a partir de 5º básico se incorpora la asignatura de inglés como obligatoria.</p>  
                        </div>
                        <div class="col-md-6">
                            <p class="card-text text-justify">Los objetivos particulares de aprendizaje a su vez contarán con un objetivo general y cuatro unidades temáticas con el contenido en detalle a desarrollar, que a su vez tendrán contenido teórico, guías, ejercicios y pruebas.</p>                  
                        </div>
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

