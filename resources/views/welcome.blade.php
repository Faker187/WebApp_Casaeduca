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
                <img class="d-block w-100" src="{{ asset('img/1.png') }}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/2.png') }}" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/3.png') }}" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/4.png') }}" alt="Third slide">
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
                    <h2 class="h2 text-white">Métodos <img src="{{ asset('img/casaeducaMetodos.png') }}" width="30" alt="img05"/></h2>
                    <p class="text-justify text-white">Lorem ipsum dolor sit amet consectetur velit habitant enim tempus proin potenti sollicitudin.</p>
                </div>
                <div class="col-md-9 my-auto">
                  <div class="pl-5">
                    <img class="card-img" src="{{ asset('img/ICONOS.png') }}" alt="primero blog">
                  </div>
                </div>
            </div>
            
        </div>
      </div>
    <!-- ====== metodos ====== -->


    <!-- ====== Cursos ====== -->
      <div id="multi-item-cursos" class="carousel slide carousel-multi-item pb-5 pt-2" data-ride="carousel">
        <h2 class="h1-responsive text-center my-4">
        <img class="card-img" src="{{ asset('img/SOMBRERO.png') }}" style="width: 100px;margin-bottom: 1rem;" alt="sombrero">
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
                <!-- Card deck -->
                <div class="card-deck">

                <!-- Card -->
                <div class="card mb-4">

                <!--Card image-->
                <div class="view overlay">
                    <img class="card-img-top" src="{{ asset('img/primerobasico.png') }}"
                    alt="Card image cap">
                    <a href="{{ url('/Cursos') }}">
                    <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title">1° Básico</h4>
                    <!--Text-->
                    <p class="card-text">¿Quieres saber de que consta este curso?, subscribete!</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <button type="button" class="btn btn-light-blue btn-md">Ver más</button>

                </div>

                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card mb-4">

                <!--Card image-->
                <div class="view overlay">
                    <img class="card-img-top" src="{{ asset('img/segundobasico.png') }}"
                    alt="Card image cap">
                    <a href="{{ url('/Cursos') }}">
                    <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title">2° Básico</h4>
                    <!--Text-->
                    <p class="card-text">¿Quieres saber de que consta este curso?, subscribete!.</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <button type="button" class="btn btn-light-blue btn-md">Ver más</button>

                </div>

                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card mb-4">

                <!--Card image-->
                <div class="view overlay">
                    <img class="card-img-top" src="{{ asset('img/tercerobasico.png') }}"
                    alt="Card image cap">
                    <a href="{{ url('/Cursos') }}">
                    <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title">3° Básico</h4>
                    <!--Text-->
                    <p class="card-text">¿Quieres saber de que consta este curso?, subscribete!</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <button type="button" class="btn btn-light-blue btn-md">Ver más</button>

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
                <div class="view overlay">
                    <img class="card-img-top" src="{{ asset('img/cuartobasico.jpg') }}"
                    alt="Card image cap">
                    <a href="{{ url('/Cursos') }}">
                    <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title">4° Básico</h4>
                    <!--Text-->
                    <p class="card-text">¿Quieres saber de que consta este curso?, subscribete!</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <button type="button" class="btn btn-light-blue btn-md">Ver más</button>

                </div>

                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card mb-4">

                <!--Card image-->
                <div class="view overlay">
                    <img class="card-img-top" src="{{ asset('img/cuartobasico.jpg') }}"
                    alt="Card image cap">
                    <a href="{{ url('/Cursos') }}">
                    <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title">5° Básico</h4>
                    <!--Text-->
                    <p class="card-text">¿Quieres saber de que consta este curso?, subscribete!</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <button type="button" class="btn btn-light-blue btn-md">Ver más</button>

                </div>

                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card mb-4">

                <!--Card image-->
                <div class="view overlay">
                    <img class="card-img-top" src="{{ asset('img/cuartobasico.jpg') }}"
                    alt="Card image cap">
                    <a href="{{ url('/Cursos') }}">
                    <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title">6° Básico</h4>
                    <!--Text-->
                    <p class="card-text">¿Quieres saber de que consta este curso?, subscribete!</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <button type="button" class="btn btn-light-blue btn-md">Ver más</button>

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
                <div class="view overlay">
                    <img class="card-img-top" src="{{ asset('img/cuartobasico.jpg') }}"
                    alt="Card image cap">
                    <a href="{{ url('/Cursos') }}">
                    <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title">7° Básico</h4>
                    <!--Text-->
                    <p class="card-text">¿Quieres saber de que consta este curso?, subscribete!.</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <button type="button" class="btn btn btn-info btn-md">Ver más</button>

                </div>

                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="card mb-4">

                <!--Card image-->
                <div class="view overlay">
                    <img class="card-img-top" src="{{ asset('img/cuartobasico.jpg') }}"
                    alt="Card image cap">
                    <a href="{{ url('/Cursos') }}">
                    <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title">8° Básico</h4>
                    <!--Text-->
                    <p class="card-text">¿Quieres saber de que consta este curso?, subscribete!</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <button type="button" class="btn btn-light-blue btn-md">Ver más</button>

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