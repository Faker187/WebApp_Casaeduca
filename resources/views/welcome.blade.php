@extends('layouts.app')

@section('content')
<style>
    .card:hover .header-img{
        transform: scale(1.25) rotate(2deg)!important;
    }
    .card-header{
        height: 50%!important;
        width: 100%!important;
        padding: 0px!important;
        overflow: hidden!important;
    }

    .header-img{
        height: 100%!important;
        width: 100%!important;
        background-size: 100%!important;
        border-radius: inherit!important;
        transition: all ease-in-out .4s!important;
    }
    .card:hover {

        -webkit-box-shadow: none!important; 
        box-shadow: none!important; 
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
    .card-img-overlay {
        background-color: rgba(#000, 0.4)!important;
    }   
    @media only screen and (max-width: 575px) {
        #titulocontainer{
            margin-top: 10rem;
        }
    } 
</style>
{{-- {{dd($cursos)}} --}}
    <div class="container-fluid px-0">
    <!-- ====== nave ====== -->
        <div class="window">
            <svg width="100%" height="100%" viewBox="215 150 750 400">
                <path class="path" id="motionPath" fill="none" stroke="none" stroke-miterlimit="10" d="M123.439979,455.027941 C258.118806,333.120816 407.729726,319.327337 572.27274,413.647502 C681.38061,476.190858 775.57925,479.840426 852.066625,457.4401 C934.367866,202.627896 472.201404,95.7232289 297.97168,106.048512 C161.922859,357.168466 865.542744,265.223102 670.108865,640.800048 C690.668168,689.128505 751.41763,692.972877 852.357248,652.333163 C858.074857,564.28197 856.244541,480.184941 846.8663,400.042076 C826.9142,229.539059 293.459629,87.9883707 89,342.020187 C234.397117,462.572183 432.187301,541.294348 594.143681,480.888963 C756.100062,420.483578 818.730878,289.99204 858.31253,97.6616162 C573.356512,423.524545 239.661415,188.754379 223.009559,646.551671 C90.870914,709.04 57.6810541,645.198757 123.439979,455.027941 Z"/>

                <g id="airplane" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="animate" transform="scale(-1, -1) translate(0.000000, -1.000000)">
                    <polygon id="Path-11" fill="#eec102" points="112 12 27.3042402 46.8861178 16.4369855 28.6655877"></polygon>
                    <polygon id="Path-12" fill="#d5ab01" points="0.00577998946 1 112 12 6.62198227 12.0555389 0 1.00387715 104.940748 1.31670683"></polygon>
                    <polygon id="Path-13" fill="#bd9600" points="0 41 6.59365455 12 112.008728 11.9997559 16.4543796 28.6623324"></polygon>
                    <polygon id="Path-14" fill="#0D1A1E" points="0 41 16.4533438 28.6610665 20.6267012 35.675215"></polygon>
                </g>
                </g>

                <animateMotion 
                    xlink:href="#airplane"
                    dur="13s"
                    begin="0s"
                    fill="freeze"
                    repeatCount="indefinite"
                    rotate="auto-reverse"
                    >
                <mpath xlink:href="#motionPath" />
                </animateMotion>
            </svg>
            <div id="clouds">
                <div class="cloud one"><img src="{{ asset('public/img/cloud1.svg') }}"/></div>
                <div class="cloud two"><img src="{{ asset('public/img/cloud2.svg') }}"/></div>
                <div class="cloud three"><img src="{{ asset('public/img/cloud3.svg') }}"/></div>
                <div class="cloud four"><img src="{{ asset('public/img/cloud2.svg') }}"/></div>
                <div class="cloud five"><img src="{{ asset('public/img/cloud1.svg') }}"/></div>
            </div>
        </div>
        <div id="titulo">
            <div class="row mx-auto">            
                <div class="col-xs-12 overflow-hidden" id="titulocontainer">
                    <h1 class="display-1 text-center animated lightSpeedIn slower color-ce0 font-weight-bold">Casa Educa</h1>
                    <h5 class="lead text-center animated lightSpeedIn slower delay-3s color-ce0">{{$eslogan}}</h5>
                </div>
            </div>
        </div>
    <!-- ====== /nave ====== -->
    </div>

    <div class="container my-5">
    <!-- ====== Características ====== -->
        <table class="table table-borderless table-responsive-sm">
            <thead>
                <tr>
                <th class="animated wow fadeInUp" scope="col" style="text-align: center;"><img src="{{ asset('public/img/profesor.svg') }}" style="width: 60%;"></br>{{$icono1}}</th>
                <th class="animated wow fadeInUp" scope="col" style="text-align: center;"><img src="{{ asset('public/img/leer.svg') }}" style="width: 60%;"></br>{{$icono2}}</th>
                <th class="animated wow fadeInUp" scope="col" style="text-align: center;"><img src="{{ asset('public/img/alfabeto.svg') }}" style="width: 60%;"></br>{{$icono3}}</th>
                <th class="animated wow fadeInUp" scope="col" style="text-align: center;"><img src="{{ asset('public/img/hablar.svg') }}" style="width: 60%;"></br>{{$icono4}}</th>
                <th class="animated wow fadeInUp" scope="col" style="text-align: center;"><img src="{{ asset('public/img/creatividad.svg') }}" style="width: 60%;"></br>{{$icono5}}</th>
                </tr>
            </thead>
        </table>
    <!-- ====== Características ====== -->
    </div>

    <hr class="slash-1">

    <div class="container my-5 sol">
    <!-- ====== plan academico ====== -->
            <div class="row justify-content-center mr-0">
                <div class="col-sm-12 mx-auto p-5 text-center">
                    <h2 class="h2-responsive mt-3 font-weight-bold text-center orange-text">Plan Académico<img class="card-img" src="{{ asset('public/img/academico.svg') }}" style="width: 50px;margin-bottom: 1rem;" alt="sombrero"></h2>
                    <p class="color-ce0 font-weight-bold" style="margin-top: 2%; font-size: 120%; text-align: center">
                    {{$invitacionPlanAcademico}}
                    </p>
                    <a class="btn btn-lg bg-ce0 text-white font-weight-bold rounded-lg" href="{{ url('/Planacademico') }}">Ver más</a>
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
            <img class="card-img" src="{{ asset('public/img/deberes.svg') }}" style="width: 50px;margin-bottom: 1rem; margin-left: 1rem;" alt="sombrero">
            </h2>
            <!--Controles-->
            <div class="d-flex justify-content-center pb-3">
                <a class="btn btn-lg bg-ce0 text-white font-weight-bold rounded-lg" href="#multi-item-cursos" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
                <a class="btn btn-lg bg-ce0 text-white font-weight-bold rounded-lg" href="#multi-item-cursos" data-slide="next"><i class="fas fa-chevron-right"></i></a>
            </div>
            <!--/.Controles-->

            <!--Indicadores-->
            <ol class="carousel-indicators">
                <li data-target="#multi-item-cursos" data-slide-to="0" class="active"></li>
                <li data-target="#multi-item-cursos" data-slide-to="1"></li>  
                <li data-target="#multi-item-cursos" data-slide-to="2"></li>    
            </ol>
            <!--/.Indicadores-->

            {{-- {{dd($cursos[0])}} --}}
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
                        <img class="header-img card-img-top" src="{{ asset('public/img/'.$cursos[0]->imagen) }}"
                        alt="Card image cap">
                        {{-- <a href="{{ url('/Cursos') }}"> --}}
                        <div class="contenedor-precio">
                            <div class="price">
                                @if ($cursos[0]->precioPlan == null)
                                    <label>Buscando el mejor precio</label> 
                                @else
                                    <label>Desde ${{$cursos[0]->precioPlan}}!</label>
                                @endif
                                
                            </div>
                        </div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">{{$cursos[0]->nombre}}</h4>
                        <!--Text-->
                        <p class="card-text">Nuestras actividades académicas constan de: <br>
                            <li><i class="fas fa-user-graduate fa-cog1 pr-3"></i><span class="text-left">8 Preguntas al profesor al mes</span></li>
                            <li><i class="fas fa-crown fa-cog3 pr-3"></i><span class="text-left">Contenido del curso ilimitado</span></li>
                            <li><i class="fas fa-history fa-cog4 pr-3"></i></i><span class="text-left">Seguimiento en avance de curso</span></li>
                        </p>
                        <p class="card-text">
                            Si quieres saber más <button type="button" class="btn bg-ce5 btn-sm"><a class="text-dark bg-ce5 " href="/Curso/{{$cursos[0]->idcurso}}"><ins>Ver más<i class="far fa-bell bg-ce5 pl-2"></i></ins></a></button>
                        </p>
                    </div>

                    </div>
                    <!-- Card -->

                    <!-- Card -->
                    <div class="card mb-4">

                        <!--Card image-->
                        <div class="card-header view overlay">
                            <img class="header-img card-img-top" src="{{ asset('public/img/'.$cursos[1]->imagen) }}"
                            alt="Card image cap">
                            {{-- <a href="{{ url('/Cursos') }}"> --}}
                            <div class="contenedor-precio">
                                <div class="price">
                                    @if ($cursos[1]->precioPlan == null)
                                        <label>Buscando el mejor precio</label> 
                                    @else
                                        <label>Desde ${{$cursos[1]->precioPlan}}!</label>
                                    @endif
                                    
                                </div>
                            </div>
                            </a>
                        </div>
    
                        <!--Card content-->
                        <div class="card-body">
    
                            <!--Title-->
                            <h4 class="card-title">{{$cursos[1]->nombre}}</h4>
                            <!--Text-->
                            <p class="card-text">Nuestras actividades académicas constan de: <br>
                                <li><i class="fas fa-user-graduate fa-cog1 pr-3"></i><span class="text-left">8 Preguntas al profesor al mes</span></li>
                                <li><i class="fas fa-crown fa-cog3 pr-3"></i><span class="text-left">Contenido del curso ilimitado</span></li>
                                <li><i class="fas fa-history fa-cog4 pr-3"></i></i><span class="text-left">Seguimiento en avance de curso</span></li>
                            </p>
                            <p class="card-text">
                                Si quieres saber más <button type="button" class="btn bg-ce5 btn-sm"><a class="text-dark bg-ce5 " href="/Curso/{{$cursos[1]->idcurso}}"><ins>Ver más<i class="far fa-bell bg-ce5 pl-2"></i></ins></a></button>
                            </p>
                        </div>
    
                        </div>
                        <!-- Card -->

                   <!-- Card -->
                   <div class="card mb-4">

                    <!--Card image-->
                    <div class="card-header view overlay">
                        <img class="header-img card-img-top" src="{{ asset('public/img/'.$cursos[2]->imagen) }}"
                        alt="Card image cap">
                        {{-- <a href="{{ url('/Cursos') }}"> --}}
                        <div class="contenedor-precio">
                            <div class="price">
                                @if ($cursos[2]->precioPlan == null)
                                    <label>Buscando el mejor precio</label> 
                                @else
                                    <label>Desde ${{$cursos[2]->precioPlan}}!</label>
                                @endif
                                
                            </div>
                        </div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">{{$cursos[2]->nombre}}</h4>
                        <!--Text-->
                        <p class="card-text">Nuestras actividades académicas constan de: <br>
                            <li><i class="fas fa-user-graduate fa-cog1 pr-3"></i><span class="text-left">8 Preguntas al profesor al mes</span></li>
                            <li><i class="fas fa-crown fa-cog3 pr-3"></i><span class="text-left">Contenido del curso ilimitado</span></li>
                            <li><i class="fas fa-history fa-cog4 pr-3"></i></i><span class="text-left">Seguimiento en avance de curso</span></li>
                        </p>
                        <p class="card-text">
                            Si quieres saber más <button type="button" class="btn bg-ce5 btn-sm"><a class="text-dark bg-ce5 " href="/Curso/{{$cursos[2]->idcurso}}"><ins>Ver más<i class="far fa-bell bg-ce5 pl-2"></i></ins></a></button>
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
                            <img class="header-img card-img-top" src="{{ asset('public/img/'.$cursos[3]->imagen) }}"
                            alt="Card image cap">
                            {{-- <a href="{{ url('/Cursos') }}"> --}}
                            <div class="contenedor-precio">
                                <div class="price">
                                    @if ($cursos[3]->precioPlan == null)
                                        <label>Buscando el mejor precio</label> 
                                    @else
                                        <label>Desde ${{$cursos[3]->precioPlan}}!</label>
                                    @endif
                                    
                                </div>
                            </div>
                            </a>
                        </div>
    
                        <!--Card content-->
                        <div class="card-body">
    
                            <!--Title-->
                            <h4 class="card-title">{{$cursos[3]->nombre}}</h4>
                            <!--Text-->
                            <p class="card-text">Nuestras actividades académicas constan de: <br>
                                <li><i class="fas fa-user-graduate fa-cog1 pr-3"></i><span class="text-left">8 Preguntas al profesor al mes</span></li>
                                <li><i class="fas fa-crown fa-cog3 pr-3"></i><span class="text-left">Contenido del curso ilimitado</span></li>
                                <li><i class="fas fa-history fa-cog4 pr-3"></i></i><span class="text-left">Seguimiento en avance de curso</span></li>
                            </p>
                            <p class="card-text">
                                Si quieres saber más <button type="button" class="btn bg-ce5 btn-sm"><a class="text-dark bg-ce5 " href="/Curso/{{$cursos[3]->idcurso}}"><ins>Ver más<i class="far fa-bell bg-ce5 pl-2"></i></ins></a></button>
                            </p>
                        </div>
    
                        </div>
                        <!-- Card -->

                    <!-- Card -->
                    <div class="card mb-4">

                        <!--Card image-->
                        <div class="card-header view overlay">
                            <img class="header-img card-img-top" src="{{ asset('public/img/'.$cursos[4]->imagen) }}"
                            alt="Card image cap">
                            {{-- <a href="{{ url('/Cursos') }}"> --}}
                            <div class="contenedor-precio">
                                <div class="price">
                                    @if ($cursos[4]->precioPlan == null)
                                        <label>Buscando el mejor precio</label> 
                                    @else
                                        <label>Desde ${{$cursos[4]->precioPlan}}!</label>
                                    @endif
                                    
                                </div>
                            </div>
                            </a>
                        </div>
    
                        <!--Card content-->
                        <div class="card-body">
    
                            <!--Title-->
                            <h4 class="card-title">{{$cursos[4]->nombre}}</h4>
                            <!--Text-->
                            <p class="card-text">Nuestras actividades académicas constan de: <br>
                                <li><i class="fas fa-user-graduate fa-cog1 pr-3"></i><span class="text-left">8 Preguntas al profesor al mes</span></li>
                                <li><i class="fas fa-crown fa-cog3 pr-3"></i><span class="text-left">Contenido del curso ilimitado</span></li>
                                <li><i class="fas fa-history fa-cog4 pr-3"></i></i><span class="text-left">Seguimiento en avance de curso</span></li>
                            </p>
                            <p class="card-text">
                                Si quieres saber más <button type="button" class="btn bg-ce5 btn-sm"><a class="text-dark bg-ce5 " href="/Curso/{{$cursos[4]->idcurso}}"><ins>Ver más<i class="far fa-bell bg-ce5 pl-2"></i></ins></a></button>
                            </p>
                        </div>
    
                        </div>
                        <!-- Card -->

                    <!-- Card -->
                    <div class="card mb-4">

                        <!--Card image-->
                        <div class="card-header view overlay">
                            <img class="header-img card-img-top" src="{{ asset('public/img/'.$cursos[5]->imagen) }}"
                            alt="Card image cap">
                            {{-- <a href="{{ url('/Cursos') }}"> --}}
                            <div class="contenedor-precio">
                                <div class="price">
                                    @if ($cursos[5]->precioPlan == null)
                                        <label>Buscando el mejor precio</label> 
                                    @else
                                        <label>Desde ${{$cursos[5]->precioPlan}}!</label>
                                    @endif
                                    
                                </div>
                            </div>
                            </a>
                        </div>
    
                        <!--Card content-->
                        <div class="card-body">
    
                            <!--Title-->
                            <h4 class="card-title">{{$cursos[5]->nombre}}</h4>
                            <!--Text-->
                            <p class="card-text">Nuestras actividades académicas constan de: <br>
                                <li><i class="fas fa-user-graduate fa-cog1 pr-3"></i><span class="text-left">8 Preguntas al profesor al mes</span></li>
                                <li><i class="fas fa-crown fa-cog3 pr-3"></i><span class="text-left">Contenido del curso ilimitado</span></li>
                                <li><i class="fas fa-history fa-cog4 pr-3"></i></i><span class="text-left">Seguimiento en avance de curso</span></li>
                            </p>
                            <p class="card-text">
                                Si quieres saber más <button type="button" class="btn bg-ce5 btn-sm"><a class="text-dark bg-ce5 " href="/Curso/{{$cursos[5]->idcurso}}"><ins>Ver más<i class="far fa-bell bg-ce5 pl-2"></i></ins></a></button>
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
                    <div class="card-deck mx-auto" style="width: 48rem;">

                    <!-- Card -->
                    <div class="card mb-4">

                        <!--Card image-->
                        <div class="card-header view overlay">
                            <img class="header-img card-img-top" src="{{ asset('public/img/'.$cursos[6]->imagen) }}"
                            alt="Card image cap">
                            {{-- <a href="{{ url('/Cursos') }}"> --}}
                            <div class="contenedor-precio">
                                <div class="price">
                                    @if ($cursos[6]->precioPlan == null)
                                        <label>Buscando el mejor precio</label> 
                                    @else
                                        <label>Desde ${{$cursos[6]->precioPlan}}!</label>
                                    @endif
                                    
                                </div>
                            </div>
                            </a>
                        </div>
    
                        <!--Card content-->
                        <div class="card-body">
    
                            <!--Title-->
                            <h4 class="card-title">{{$cursos[6]->nombre}}</h4>
                            <!--Text-->
                            <p class="card-text">Nuestras actividades académicas constan de: <br>
                                <li><i class="fas fa-user-graduate fa-cog1 pr-3"></i><span class="text-left">8 Preguntas al profesor al mes</span></li>
                                <li><i class="fas fa-crown fa-cog3 pr-3"></i><span class="text-left">Contenido del curso ilimitado</span></li>
                                <li><i class="fas fa-history fa-cog4 pr-3"></i></i><span class="text-left">Seguimiento en avance de curso</span></li>
                            </p>
                            <p class="card-text">
                                Si quieres saber más <button type="button" class="btn bg-ce5 btn-sm"><a class="text-dark bg-ce5 " href="/Curso/{{$cursos[6]->idcurso}}"><ins>Ver más<i class="far fa-bell bg-ce5 pl-2"></i></ins></a></button>
                            </p>
                        </div>
    
                        </div>
                        <!-- Card -->

                   <!-- Card -->
                   <div class="card mb-4">

                    <!--Card image-->
                    <div class="card-header view overlay">
                        <img class="header-img card-img-top" src="{{ asset('public/img/'.$cursos[7]->imagen) }}"
                        alt="Card image cap">
                        {{-- <a href="{{ url('/Cursos') }}"> --}}
                        <div class="contenedor-precio">
                            <div class="price">
                                @if ($cursos[7]->precioPlan == null)
                                    <label>Buscando el mejor precio</label> 
                                @else
                                    <label>Desde ${{$cursos[7]->precioPlan}}!</label>
                                @endif
                                
                            </div>
                        </div>
                        </a>
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <!--Title-->
                        <h4 class="card-title">{{$cursos[7]->nombre}}</h4>
                        <!--Text-->
                        <p class="card-text">Nuestras actividades académicas constan de: <br>
                            <li><i class="fas fa-user-graduate fa-cog1 pr-3"></i><span class="text-left">8 Preguntas al profesor al mes</span></li>
                            <li><i class="fas fa-crown fa-cog3 pr-3"></i><span class="text-left">Contenido del curso ilimitado</span></li>
                            <li><i class="fas fa-history fa-cog4 pr-3"></i></i><span class="text-left">Seguimiento en avance de curso</span></li>
                        </p>
                        <p class="card-text">
                            Si quieres saber más <button type="button" class="btn bg-ce5 btn-sm"><a class="text-dark bg-ce5 " href="/Curso/{{$cursos[7]->idcurso}}"><ins>Ver más<i class="far fa-bell bg-ce5 pl-2"></i></ins></a></button>
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