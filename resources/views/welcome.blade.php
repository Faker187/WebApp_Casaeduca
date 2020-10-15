@extends('layouts.app')

@section('content')
<style>
    .card:hover .header-img{
        transform: scale(1.25) rotate(2deg);
    }
    .card-header{
        height: 50%;
        width: 100%;
        padding: 0px;
        overflow: hidden;
    }

    .header-img{
        height: 100%;
        width: 100%;
        background-size: 100%;
        border-radius: inherit;
        transition: all ease-in-out .4s;
    }
    .card:hover {

        -webkit-box-shadow: none; 
        box-shadow: none; 
    }
    .card:hover::before {
        top: -10px!important;
        left: -10px!important;
        right: -10px!important;
        bottom: -10px!important;
        box-shadow: 0 0 15px 0 rgba(0, 0, 0, 0.3)!important;
    }
    .card::before {
        position: absolute!important;
        top: 0!important;
        left: 0!important;
        bottom: 0!important;
        right: 0!important;
        content: ""!important;
        transition: all 0.5s ease-out 0s!important;
        -webkit-transition: all 0.5s ease-out 0s!important;
    }
    .card-deck{
        padding: 1rem!important;
    }
    .card-header .contenedor-precio .price{
        background-color: #673ab7!important;
    }
    .price {
        position: absolute!important;
        bottom: 10px!important;
        right: 10px!important;
        margin: 0!important;
        padding: 14px 15px!important;
        z-index: 11!important;
        transition: all 0.5s ease-out 0s!important;
        -webkit-transition: all 0.5s ease-out 0s!important;
        color: #fff!important;
        font-weight: bold!important;
        font-size: large!important;
    }

    body{
        padding: 2rem 0rem;
    }
    .card-img-overlay {
        background-color: rgba(#000, 0.4);
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
    <div class="container-fluid px-0">
    <!-- ====== slide ====== -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('img/ninos-computadora.jpg') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/nino-jugando.jpg') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('img/nino-pintando.jpg') }}" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/dibujo-sol.jpg') }}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
      </div>
    <!-- ====== /slide ====== -->
    </div>

    <div class="container my-5">
    <!-- ====== Características ====== -->
        <table class="table table-borderless">
            <thead>
                <tr>
                <th scope="col" style="text-align: center;"><img src="{{ asset('img/profesor.svg') }}" style="width: 60%;"></br>Profesores Online</th>
                <th scope="col" style="text-align: center;"><img src="{{ asset('img/leer.svg') }}" style="width: 60%;"></br>Interacción Web</th>
                <th scope="col" style="text-align: center;"><img src="{{ asset('img/alfabeto.svg') }}" style="width: 60%;"></br>Clases Online 24/7</th>
                <th scope="col" style="text-align: center;"><img src="{{ asset('img/hablar.svg') }}" style="width: 60%;"></br>Comunicación fluida</th>
                <th scope="col" style="text-align: center;"><img src="{{ asset('img/creatividad.svg') }}" style="width: 60%;"></br>Profesores Online</th>
                </tr>
            </thead>
        </table>
    <!-- ====== Características ====== -->
    </div>
    <hr class="slash-1">

    <div class="container my-5 sol">
    <!-- ====== plan academico ====== -->
            <div class="row">
                <div class="col-sm">
                    <h3 style="margin-left: 5%; margin-top: 15%;text-align: center">Plan Académico<img class="card-img" src="{{ asset('img/academico.svg') }}" style="width: 50px;margin-bottom: 1rem; margin-left: 0.5rem;" alt="sombrero"></h3>
                    <p style="margin-left: 5%;margin-right:5%; margin-top: 2%; font-size: 150%; text-align: center">
                    Nuestro Proyecto Educativo esta orientado hacia los alumnos de enseñanza básica, con una clara orientación a la preparación de exámenes libres, si quieres saber más....</p>
                    <button type="button" class="btn btn-outline-secondary" style="margin-left: 48%; margin-bottom: 10%; font-size: 50%; text-align: center ">Ver más</button>
                </div>
            </div>
    <!-- ====== /plan academico ====== -->
    </div>
    <hr class="slash-1">

    <div class="container my-5 ">
    <!-- ====== Cursos ====== -->
        <div id="multi-item-cursos" class="carousel slide carousel-multi-item pb-5 pt-2" data-ride="carousel">
            <h2 class="h1-responsive text-center my-4">
            Nuestros cursos
            <img class="card-img" src="{{ asset('img/deberes.svg') }}" style="width: 50px;margin-bottom: 1rem; margin-left: 1rem;" alt="sombrero">
            </h2>
            <!--Controles-->
            <div class="d-flex justify-content-center pb-3">
                <a class="btn btn-sm rounded bg-ce4 text-white" href="#multi-item-cursos" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                <a class="btn btn-sm rounded bg-ce4 text-white" href="#multi-item-cursos" data-slide="next"><i class="fas fa-chevron-right"></i></a>
            </div>
            <!--/.Controles-->

            <!--Indicadores-->
            <ol class="carousel-indicators">
                <li data-target="#multi-item-cursos" data-slide-to="0" class="active"></li>
                <li data-target="#multi-item-cursos" data-slide-to="1"></li>  
                <li data-target="#multi-item-cursos" data-slide-to="2"></li>    
            </ol>
            <!--/.Indicadores-->

            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!-- Primer slide-->
                <div class="carousel-item active">
                    <!-- Card deck -->
                    <div class="card-deck">

                    <!-- Card -->
                    <div class="card mb-4">

                    <!--Card image-->
                    <div class="card-header view overlay">
                        <img class="header-img card-img-top" src="{{ asset('img/primerobasico.png') }}"
                        alt="Card image cap">
                        <a href="{{ url('/Cursos') }}">
                        <div class="contenedor-precio">
                            <div class="price">
                                <label>$ 19.990</label>
                            </div>
                        </div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">1° Básico</h4>
                        <!--Text-->
                        <p class="card-text">Nuestras actividades académicas constan de: <br>
                            <li><i class="fas fa-user-graduate fa-cog1 pr-3"></i><span class="text-left">3 Preguntas al profesor al mes</span></li>
                            <li><i class="fab fa-youtube fa-cog2 pr-3"></i><span class="text-left">1 Video clase al mes</span></li>
                            <li><i class="fas fa-crown fa-cog3 pr-3"></i><span class="text-left">Contenido del curso ilimitado</span></li>
                            <li><i class="fas fa-history fa-cog4 pr-3"></i></i><span class="text-left">Seguimiento en avance de curso</span></li>
                        </p>
                        <p class="card-text">
                            Si quieres saber más <button type="button" class="btn bg-ce5 btn-sm"><a class="text-dark bg-ce5 "><ins>Subscríbete<i class="far fa-bell bg-ce5 pl-2"></i></ins></a></button>
                        </p>
                    </div>

                    </div>
                    <!-- Card -->

                    <!-- Card -->
                    <div class="card mb-4">

                    <!--Card image-->
                    <div class=" card-header view overlay">
                        <img class="header-img card-img-top" src="{{ asset('img/segundobasico.png') }}"
                        alt="Card image cap">
                        <a href="{{ url('/Cursos') }}">
                        <div class="contenedor-precio">
                            <div class="price">
                                    <label>$ 19.990</label>
                            </div>
                        </div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">2° Básico</h4>
                        <!--Text-->
                        <p class="card-text">Nuestras actividades académicas constan de: <br>
                            <li><i class="fas fa-user-graduate fa-cog1 pr-3"></i><span class="text-left">3 Preguntas al profesor al mes</span></li>
                            <li><i class="fab fa-youtube fa-cog2 pr-3"></i><span class="text-left">1 Video clase al mes</span></li>
                            <li><i class="fas fa-crown fa-cog3 pr-3"></i><span class="text-left">Contenido del curso ilimitado</span></li>
                            <li><i class="fas fa-history fa-cog4 pr-3"></i></i><span class="text-left">Seguimiento en avance de curso</span></li>
                        </p>
                        <p class="card-text">
                            Si quieres saber más <button type="button" class="btn bg-ce5 btn-sm"><a class="text-dark bg-ce5 "><ins>Subscríbete<i class="far fa-bell bg-ce5 pl-2"></i></ins></a></button>
                        </p>

                    </div>

                    </div>
                    <!-- Card -->

                    <!-- Card -->
                    <div class="card mb-4">

                    <!--Card image-->
                    <div class=" card-header view overlay">
                        <img class=" header-img card-img-top" src="{{ asset('img/tercerobasico.png') }}"
                        alt="Card image cap">
                        <a href="{{ url('/Cursos') }}">
                        <div class="contenedor-precio">
                            <div class="price">
                                    <label>$ 19.990</label>
                            </div>
                        </div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">3° Básico</h4>
                        <!--Text-->
                        <p class="card-text">Nuestras actividades académicas constan de: <br>
                            <li><i class="fas fa-user-graduate fa-cog1 pr-3"></i><span class="text-left">3 Preguntas al profesor al mes</span></li>
                            <li><i class="fab fa-youtube fa-cog2 pr-3"></i><span class="text-left">1 Video clase al mes</span></li>
                            <li><i class="fas fa-crown fa-cog3 pr-3"></i><span class="text-left">Contenido del curso ilimitado</span></li>
                            <li><i class="fas fa-history fa-cog4 pr-3"></i></i><span class="text-left">Seguimiento en avance de curso</span></li>

                        </p>
                        <p class="card-text">
                            Si quieres saber más <button type="button" class="btn bg-ce5 btn-sm"><a class="text-dark bg-ce5 "><ins>Subscríbete<i class="far fa-bell bg-ce5 pl-2"></i></ins></a></button>
                        </p>

                    </div>

                    </div>
                    <!-- Card -->

                    </div>
                    <!-- Card deck -->
                </div>
                <!-- Primer slide-->

                <!--SEgundo slide-->
                <div class="carousel-item">
                    <!-- Card deck -->
                    <div class="card-deck">

                    <!-- Card -->
                    <div class="card mb-4">

                    <!--Card image-->
                    <div class="card-header view overlay">
                        <img class="header-img card-img-top" src="{{ asset('img/cuartobasico.jpg') }}"
                        alt="Card image cap">
                        <a href="{{ url('/Cursos') }}">
                        <div class="contenedor-precio">
                            <div class="price">
                                <label>$ 19.990</label>
                            </div>
                        </div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">4° Básico</h4>
                        <!--Text-->
                        <p class="card-text">Nuestras actividades académicas constan de: <br>
                            <li><i class="fas fa-user-graduate fa-cog1 pr-3"></i><span class="text-left">3 Preguntas al profesor al mes</span></li>
                            <li><i class="fab fa-youtube fa-cog2 pr-3"></i><span class="text-left">1 Video clase al mes</span></li>
                            <li><i class="fas fa-crown fa-cog3 pr-3"></i><span class="text-left">Contenido del curso ilimitado</span></li>
                            <li><i class="fas fa-history fa-cog4 pr-3"></i></i><span class="text-left">Seguimiento en avance de curso</span></li>
                        </p>
                        <p class="card-text">
                            Si quieres saber más <button type="button" class="btn bg-ce5 btn-sm"><a class="text-dark bg-ce5 "><ins>Subscríbete<i class="far fa-bell bg-ce5 pl-2"></i></ins></a></button>
                        </p>
                    </div>

                    </div>
                    <!-- Card -->

                    <!-- Card -->
                    <div class="card mb-4">

                    <!--Card image-->
                    <div class="card-header view overlay">
                        <img class="header-img card-img-top" src="{{ asset('img/cuartobasico.jpg') }}"
                        alt="Card image cap">
                        <a href="{{ url('/Cursos') }}">
                        <div class="contenedor-precio">
                            <div class="price">
                                <label>$ 19.990</label>
                            </div>
                        </div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">5° Básico</h4>
                        <!--Text-->
                        <p class="card-text">Nuestras actividades académicas constan de: <br>
                            <li><i class="fas fa-user-graduate fa-cog1 pr-3"></i><span class="text-left">3 Preguntas al profesor al mes</span></li>
                            <li><i class="fab fa-youtube fa-cog2 pr-3"></i><span class="text-left">1 Video clase al mes</span></li>
                            <li><i class="fas fa-crown fa-cog3 pr-3"></i><span class="text-left">Contenido del curso ilimitado</span></li>
                            <li><i class="fas fa-history fa-cog4 pr-3"></i></i><span class="text-left">Seguimiento en avance de curso</span></li>
                        </p>
                        <p class="card-text">
                            Si quieres saber más <button type="button" class="btn bg-ce5 btn-sm"><a class="text-dark bg-ce5 "><ins>Subscríbete<i class="far fa-bell bg-ce5 pl-2"></i></ins></a></button>
                        </p>
                    </div>

                    </div>
                    <!-- Card -->

                    <!-- Card -->
                    <div class="card mb-4">

                    <!--Card image-->
                    <div class="card-header view overlay">
                        <img class="header-img card-img-top" src="{{ asset('img/cuartobasico.jpg') }}"
                        alt="Card image cap">
                        <a href="{{ url('/Cursos') }}">
                        <div class="contenedor-precio">
                            <div class="price">
                                <label>$ 19.990</label>
                            </div>
                        </div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">6° Básico</h4>
                        <!--Text-->
                        <p class="card-text">Nuestras actividades académicas constan de: <br>
                            <li><i class="fas fa-user-graduate fa-cog1 pr-3"></i><span class="text-left">3 Preguntas al profesor al mes</span></li>
                            <li><i class="fab fa-youtube fa-cog2 pr-3"></i><span class="text-left">1 Video clase al mes</span></li>
                            <li><i class="fas fa-crown fa-cog3 pr-3"></i><span class="text-left">Contenido del curso ilimitado</span></li>
                            <li><i class="fas fa-history fa-cog4 pr-3"></i></i><span class="text-left">Seguimiento en avance de curso</span></li>
                        </p>
                        <p class="card-text">
                            Si quieres saber más <button type="button" class="btn bg-ce5 btn-sm"><a class="text-dark bg-ce5 "><ins>Subscríbete<i class="far fa-bell bg-ce5 pl-2"></i></ins></a></button>
                        </p>
                    </div>

                    </div>
                    <!-- Card -->

                    </div>
                    <!-- Card deck -->
                </div>
                <!--Segundo slide-->

                <!--Tercer slide-->
                <div class="carousel-item">
                    <!-- Card deck -->
                    <div class="card-deck">

                    <!-- Card -->
                    <div class="card mb-4">

                    <!--Card image-->
                    <div class="card-header view overlay">
                        <img class="header-img card-img-top" src="{{ asset('img/cuartobasico.jpg') }}"
                        alt="Card image cap">
                        <a href="{{ url('/Cursos') }}">
                        <div class="contenedor-precio">
                            <div class="price">
                                <label>$ 19.990</label>
                            </div>
                        </div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">7° Básico</h4>
                        <!--Text-->
                        <p class="card-text">Nuestras actividades académicas constan de: <br>
                            <li><i class="fas fa-user-graduate fa-cog1 pr-3"></i><span class="text-left">3 Preguntas al profesor al mes</span></li>
                            <li><i class="fab fa-youtube fa-cog2 pr-3"></i><span class="text-left">1 Video clase al mes</span></li>
                            <li><i class="fas fa-crown fa-cog3 pr-3"></i><span class="text-left">Contenido del curso ilimitado</span></li>
                            <li><i class="fas fa-history fa-cog4 pr-3"></i></i><span class="text-left">Seguimiento en avance de curso</span></li>
                        </p>
                        <p class="card-text">
                            Si quieres saber más <button type="button" class="btn bg-ce5 btn-sm"><a class="text-dark bg-ce5 "><ins>Subscríbete<i class="far fa-bell bg-ce5 pl-2"></i></ins></a></button>
                        </p>
                    </div>

                    </div>
                    <!-- Card -->

                    <!-- Card -->
                    <div class="card mb-4">

                    <!--Card image-->
                    <div class="card-header view overlay">
                        <img class="header-img card-img-top" src="{{ asset('img/cuartobasico.jpg') }}"
                        alt="Card image cap">
                        <a href="{{ url('/Cursos') }}">
                        <div class="contenedor-precio">
                            <div class="price">
                                <label>$ 19.990</label>
                            </div>
                        </div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">8° Básico</h4>
                        <!--Text-->
                        <p class="card-text">Nuestras actividades académicas constan de: <br>
                            <li><i class="fas fa-user-graduate fa-cog1 pr-3"></i><span class="text-left">3 Preguntas al profesor al mes</span></li>
                            <li><i class="fab fa-youtube fa-cog2 pr-3"></i><span class="text-left">1 Video clase al mes</span></li>
                            <li><i class="fas fa-crown fa-cog3 pr-3"></i><span class="text-left">Contenido del curso ilimitado</span></li>
                            <li><i class="fas fa-history fa-cog4 pr-3"></i></i><span class="text-left">Seguimiento en avance de curso</span></li>
                        </p>
                        <p class="card-text">
                            Si quieres saber más <button type="button" class="btn bg-ce5 btn-sm"><a class="text-dark bg-ce5 "><ins>Subscríbete<i class="far fa-bell bg-ce5 pl-2"></i></ins></a></button>
                        </p>
                    </div>

                    </div>
                    <!-- Card -->

                    </div>
                    <!-- Card deck -->
                </div>
                <!--TERCER slide-->
            </div>
            <!--/.Slides-->

        </div>
    <!-- ====== Cursos ====== -->
    </div>

@endsection