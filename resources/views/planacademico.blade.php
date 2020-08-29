@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f9e085 !important;
    }
</style>
<div class="container">
<!-- ====== blog ====== -->
<div class="row mt-5">
    <div class="col-md-12">
        <h1 class="h1-responsive text-center text-white">Plan Académico</h1>
    </div>
</div>
<div class="row mt-5">
    <div class="col-md-8">
        <h2 class="h2-responsive text-left text-white"><ins>Nuestro Proyecto Educativo</ins></h2>
        <p class="my-3 lead text-white">Nuestro Proyecto Educativo esta orientado hacia los alumnos de enseñanza básica, con una clara orientación a la preparación de exámenes libres, de acuerdo a lo dispuesto en los planes y programas oficiales del Ministerio de educación vigentes para los respectivos cursos y niveles, con propósitos definidos, articulados para segurar una adecuada trayectpria educativa entre sí y correlacionado con la etapa de vida de los alumnos entre los 6 y 13 años.</p>
    </div>
    <hr class="my-5 text-white"> 
    <div class="col-md-4">
        <img class="card-img rounded-circle hoverable my-5" src="{{ asset('img/blog1.jpg') }}" alt="primero blog">
    </div>
    <div class="col-md-12">
        <h2 class="h2-responsive text-left text-white"><ins>Que es importante tener presente</ins></h2>
        <img class="card-img my-5" src="{{ asset('img/pasosplan.png') }}" alt="primero blog">
    </div>
    <div class="col-md-12">
        <h2 class="h2-responsive text-left text-white"><ins>Supcripción Mensual</ins></h2>
        <p class="my-3 lead text-white">Nuestra suscripción permitirá acceder a todo nuestro contenido en forma permanente 24/7 ​Las clases on line y los chats deberàn ser programados en horario  de 9 a 18 horas de lunes a viernes.</p>
    </div>
    <div class="col-md-12">
        <h2 class="h2-responsive text-left text-white"><ins>Descripción</ins></h2>
        <p class="my-3 lead text-white">Cada curso constará de un objetivo general a lograr y objetivos particulares de aprendizaje en Lenguaje y Comunicación, Matemáticas, Ciencias Naturales e Historia, Geografía y Ciencias Sociales, y a partir de 5º básico se incorpora la asignatura de inglés como obligatoria.<br></p>
        <p class="my-3 lead text-white">Los objetivos particulares de aprendizaje a su vez contarán con un objetivo general y cuatro unidades temáticas con el contenido en detalle a desarrollar, que a su vez tendrán contenido teórico, guías, ejercicios y pruebas.</p>
    </div>
    <div class="col-md-12">
        <h2 class="h2-responsive text-left text-white"><ins>Soporte Educacional</ins></h2>
        <p class="my-3 lead text-white">Casa Educa diseñará un programa personalizado de estudio que además incluirá 2 clase on line y 8 chats mensuales, como apoyo adicional a la resolución de problemas y solución de dudas.</p>
    </div>
</div>
<!-- ====== /blog ====== -->
</div>
@endsection

