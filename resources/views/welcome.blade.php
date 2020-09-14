@extends('layouts.app')

@section('content')
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
                <img class="d-block w-100" src="{{ asset('public/img/1.png') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('public/img/2.png') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('public/img/3.png') }}" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('public/img/4.png') }}" alt="Third slide">
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
    <!-- ====== plan academico ====== -->
      <div class="card cardplan">
        <div class="card-body mt-5 pt-5">
            <h1 class="display-4 color-ce5">Plan <br>Académico</h1>
            <a class="btn btn-outline-warning rounded-lg color-ce5" href="{{ url('/Planacademico') }}" role="button">Leer más</a>
        </div>
      </div>
    <!-- ====== /plan academico ====== -->



    <!-- ====== metodos ====== -->
      <div class="card mt-5 bg-ce5">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="h2 text-white">Métodos <img src="{{ asset('public/img/casaeducaMetodos.png') }}" width="30" alt="img05"/></h2>
                    <p class="text-justify text-white">Lorem ipsum dolor sit amet consectetur velit habitant enim tempus proin potenti sollicitudin.</p>
                </div>
                <div class="col-md-9 my-auto">
                  <div class="pl-5">
                    <img class="card-img" src="{{ asset('public/img/ICONOS.png') }}" alt="primero blog">
                  </div>
                </div>
            </div>
            
        </div>
      </div>
    <!-- ====== metodos ====== -->


    <!-- ====== Cursos ====== -->
      <div id="multi-item-cursos" class="carousel slide carousel-multi-item pb-5 pt-2" data-ride="carousel">
        <h2 class="h1-responsive text-center my-4">
        <img class="card-img" src="{{ asset('public/img/SOMBRERO.png') }}" style="width: 100px;margin-bottom: 1rem;" alt="sombrero">
          Nuestros cursos
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

                <div class="col-sm-4 " style="float:left">
                    <div class="grid">
                        <figure class="effect-kira">
                        <img class="card-img" src="{{ asset('public/img/primerobasico.png') }}" alt="primero basico">
                        <figcaption>
                            <h2><span>1° </span>Básico</h2>
                            <p>
                                <a href="#"><i class="fas fas-fw fa-angle-double-right pr-2"></i> Ver mas</a>
                            </p>
                        </figcaption>			
                        </figure>
                    </div>
                </div>

                <div class="col-sm-4" style="float:left">
                    <div class="grid">
                    <figure class="effect-kira">
                    <img class="card-img" src="{{ asset('public/img/segundobasico.png') }}" alt="segundo basico">
                        <figcaption>
                            <h2><span>2° </span>Básico</h2>
                            <p>
                                <a href="#"><i class="fas fas-fw fa-angle-double-right pr-2"></i> Ver mas</a>
                            </p>
                        </figcaption>			
                    </figure>
                    </div>
                </div>

                <div class="col-sm-4" style="float:left">
                    <div class="grid">
                        <figure class="effect-kira">
                        <img class="card-img" src="{{ asset('public/img/tercerobasico.png') }}" alt="tercero basico">
                        <figcaption>
                            <h2><span>3° </span>Básico</h2>
                            <p>
                                <a href="#"><i class="fas fas-fw fa-angle-double-right pr-2"></i> Ver mas</a>
                            </p>
                        </figcaption>			
                        </figure>
                    </div>
                </div>

            </div>
            <!-- Primer slide-->

            <!--SEgundo slide-->
            <div class="carousel-item">
                <div class="col-sm-4 " style="float:left">
                    <div class="grid">
                        <figure class="effect-kira">
                        <img class="card-img" src="{{ asset('public/img/cuartobasico.jpg') }}" alt="cuarto basico">
                        <figcaption>
                            <h2><span>4° </span>Básico</h2>
                            <p>
                                <a href="#"><i class="fas fas-fw fa-angle-double-right pr-2"></i> Ver mas</a>
                            </p>
                        </figcaption>			
                        </figure>
                    </div>
                </div>

                <div class="col-sm-4 " style="float:left">
                    <div class="grid">
                        <figure class="effect-kira">
                        <img class="card-img" src="{{ asset('public/img/quintobasico.jpg') }}" alt="quinto basico">
                        <figcaption>
                            <h2><span>5° </span>Básico</h2>
                            <p>
                                <a href="#"><i class="fas fas-fw fa-angle-double-right pr-2"></i> Ver mas</a>
                            </p>
                        </figcaption>			
                        </figure>
                    </div>
                </div>

                <div class="col-sm-4 " style="float:left">
                    <div class="grid">
                        <figure class="effect-kira">
                        <img src="{{ asset('public/img/cuartobasico.png') }}" alt="sexto basico">
                        <figcaption>
                            <h2><span>6° </span>Básico</h2>
                            <p>
                                <a href="#"><i class="fas fas-fw fa-angle-double-right pr-2"></i> Ver mas</a>
                            </p>
                        </figcaption>			
                        </figure>
                    </div>
                </div>
            </div>
            <!--Segundo slide-->

            <!--Tercer slide-->
            <div class="carousel-item">
                <div class="col-sm-4 " style="float:left">
                    <div class="grid">
                        <figure class="effect-kira">
                        <img src="{{ asset('public/img/cuartobasico.jpg') }}" alt="septimo basico">
                        <figcaption>
                            <h2><span>7° </span>Básico</h2>
                            <p>
                                <a href="#"><i class="fas fas-fw fa-angle-double-right pr-2"></i> Ver mas</a>
                            </p>
                        </figcaption>			
                        </figure>
                    </div>
                </div>

                <div class="col-sm-4 " style="float:left">
                    <div class="grid">
                        <figure class="effect-kira">
                        <img src="{{ asset('public/img/cuartobasico.jpg') }}" alt="octavo basico">
                        <figcaption>
                            <h2><span>8° </span>Básico</h2>
                            <p>
                                <a href="#"><i class="fas fas-fw fa-angle-double-right pr-2"></i> Ver mas</a>
                            </p>
                        </figcaption>			
                        </figure>
                    </div>
                </div>
            </div>
            <!--TERCER slide-->
        </div>
        <!--/.Slides-->

      </div>
    <!-- ====== Cursos ====== -->

    </div>
@endsection