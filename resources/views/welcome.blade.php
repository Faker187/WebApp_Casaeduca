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

    <div class="container-fluid my-5">
    <!-- ====== plan academico ====== -->
      <div class="card bg-dark cardplan text-white">
        <img class="card-img" src="{{ asset('img/3.png') }}" alt="Card image">
        <div class="card-img-overlay transbox">
            <h1 class="card-title display-3">Plan academico</h1>
            <a class="btn btn-dark-outline btn-lg text-dark" href="#" role="button">Leer mas</a>
        </div>
      </div>
    <!-- ====== /plan academico ====== -->


    <!-- ====== metodos ====== -->
      <div class="card my-5">
        <h5 class="card-header">Métodos</h5>
        <div class="card-body"></div>
      </div>
    <!-- ====== metodos ====== -->

    <!-- ====== Cursos ====== -->
      <div id="multi-item-example" class="carousel slide carousel-multi-item py-5" data-ride="carousel">

        <!--Controls-->
        <div class="controls-top">
            <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
            <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
                class="fas fa-chevron-right"></i></a>
        </div>
        <!--/.Controls-->

        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-example" data-slide-to="1"></li>
            
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">

            <div class="col-md-3" style="float:left">
            <div class="card mb-2">
                <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                    <a class="btn btn-primary">Button</a>
                </div>
                </div>
            </div>

            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                    <a class="btn btn-primary">Button</a>
                </div>
                </div>
            </div>

            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                    <a class="btn btn-primary">Button</a>
                </div>
                </div>
            </div>
            
            <div class="col-md-3" style="float:left">
            <div class="card mb-2">
                <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                    <a class="btn btn-primary">Button</a>
                </div>
                </div>
            </div>

            </div>
            <!--/.First slide-->

            <!--Second slide-->
            <div class="carousel-item">

            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                    <a class="btn btn-primary">Button</a>
                </div>
                </div>
            </div>

            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                    <a class="btn btn-primary">Button</a>
                </div>
                </div>
            </div>

            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                    <a class="btn btn-primary">Button</a>
                </div>
                </div>
            </div>
            
            <div class="col-md-3" style="float:left">
                <div class="card mb-2">
                <img class="card-img-top"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                    <a class="btn btn-primary">Button</a>
                </div>
                </div>
            </div>

            </div>
            <!--/.Second slide-->

        

        </div>
        <!--/.Slides-->

      </div>
    <!-- ====== Cursos ====== -->
    </div>
@endsection