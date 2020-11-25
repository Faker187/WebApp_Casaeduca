@extends('layouts.app')

@section('content')
<style>
.sidenav {
    width: 40vh;
    position: fixed;
    z-index: 1;
    top: 14%;
    overflow-x: hidden;
    margin: 1rem;
}
.sidenav .side-body{
    background: #fff;
    padding: 2em;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;position: absolute;}
  .sidenav a {font-size: 18px;}
}
@media screen and (width: 1980px) {
  .cursodatacard {
    margin-left: auto!important;
    margin-right: auto!important;
  }
}
</style>
<div class="container-fluid px-0 bg-ce1 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-white mr-auto pl-5">
            <div class="text-white text-left py-5 px-4 my-5">
              <div class="cursodatacard">
                <h2 class="card-title h1-responsive pt-3 mb-2 font-bold color-ce0">
                    <img class="card-img" src="{{ asset('public/img/SOMBRERO.png') }}" style="width: 120px;margin-bottom: 1rem;" alt="sombrero">
                    <strong>Primero Básico</strong>
                </h2>
                <p class="mb-2 color-ce0">En este encontraremos las asignaturas de:</p>
                <span class="badge badge-pill badge-primary">Matemáticas</span>
                <span class="badge badge-pill badge-danger">Lenguaje</span>
                <span class="badge badge-pill badge-success">Historia</span>
              </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mr-auto">
            <div class="card w-100 text-dark bg-ce5 mb-5">
                <div class="card-body">
                    <h5 class="card-title pr-2 color-ce3">Lo que aprenderás</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <li class="pr-2 m-3 card-text"><i class="fas fa-check pr-2 color-ce3"></i> Lorem ipsum dolor sit amet.</li>
                            <li class="pr-2 m-3 card-text"><i class="fas fa-check pr-2 color-ce3"></i> Lorem ipsum dolor sit amet.</li>
                            <li class="pr-2 m-3 card-text"><i class="fas fa-check pr-2 color-ce3"></i> Lorem ipsum dolor sit amet.</li>
                        </div>
                        <div class="col-md-6">
                            <li class="pr-2 m-3 card-text"><i class="fas fa-check pr-2 color-ce3"></i> Lorem ipsum dolor sit amet.</li>
                            <li class="pr-2 m-3 card-text"><i class="fas fa-check pr-2 color-ce3"></i> Lorem ipsum dolor sit amet.</li>
                            <li class="pr-2 m-3 card-text"><i class="fas fa-check pr-2 color-ce3"></i> Lorem ipsum dolor sit amet.</li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card w-100 border-0">
                <div class="card-body">
                    <h5 class="card-title pr-2 color-ce3">Descripción</h5>
                    <p class="card-text">Se espera que los niños que comienzan primero básico conozcan el alfabeto y las características básicas de las letras y las palabras. También suelen ser capaces de reconocer y decir palabras que riman, lo que permite a nuestros nuevos lectores a aprender palabras nuevas y leer libros sencillos. En cuanto a la escritura, se espera que dibujen, escriban letras y palabras, escuchen a los demás y hablen en voz alta. En este curso deberían aprender los números y lo que representan, como relacionar los números en forma concreta y la suma y resta. En esta edad, es cuando los niños aprenden a una mayor velocidad, ganan más confianza y hacen amigos. Utilizan frases más complejas y con una pronunciación más clara, logran verse de forma independiente. Escriben descripciones breves de historias. Comprenden los mapas con ayuda de instrucciones y utilizan estrategias para resolver problemas matemáticos. Sus habilidades motoras mejoran y comprenden la acción de compartir..</p>
                </div>
            </div>
            <div class="card border-0 align-items-center my-2">
                <img class="img-fluid " src="{{ asset('public/img/MANO_A.png') }}" style="width: 180px;margin-bottom: 1rem;" alt="camara">
            </div>
        </div>
        <div class="col-md-5">
            <div class="sidenav z-depth-1 border rounded-top">
                <div class="sideimg">
                    <img class="w-100" src="{{ asset('public/img/ninaestudiando.jpg') }}" alt="niña estudiando">
                </div>
                <div class="side-body">
                    <h4 class="h4-responsive mb-3">$ 19.990<strong class="text-muted"> CLP</strong></h4>
                    <button class="btn btn-block bg-ce0 text-white pb-3">Suscribirse</button>
                    <hr>
                    <span class="card-text py-2 font-weight-bold">Este curso incluye:</span>
                    <li class="card-text m-1 pt-3 p-1"><i class="fas fa-history pr-3 color-ce3"></i>Seguimiento.</li>
                    <li class="card-text m-1 p-1"><i class="fas fa-crown  pr-3 color-ce3"></i>Contenido del curso ilimitado .</li>
                    <li class="card-text m-1 p-1"><i class="fas fa-user-graduate color-ce3 pr-3"></i>3 preguntas al profesor(cda/mes).</li>
                    <li class="card-text m-1 p-1"><i class="fab fa-youtube color-ce3 pr-3"></i>1 video clase al mes.</li>
                    <hr class="my-4">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection