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
      <div class="card bg-dark cardplan text-white">
        <img class="card-img" src="{{ asset('img/3.png') }}" alt="Card image">
        <div class="card-img-overlay transbox">
            <h1 class="card-title display-3">Plan academico</h1>
            <a class="btn btn-dark-outline btn-lg text-dark" href="#" role="button">Leer mas</a>
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
                    <i class="far fa-image fa-2x mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></i>
                    <i class="fas fa-briefcase fa-2x mr-4 mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></i>
                    <i class="fas fa-anchor fa-2x mr-4 mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></i>
                    <i class="far fa-image fa-2x mr-4 grey p-3 white-text rounded-circle " aria-hidden="true"></i>
                    <i class="fas fa-briefcase fa-2x mr-4 mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></i>
                    <i class="fas fa-anchor fa-2x mr-4 mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></i>
                    <i class="fas fa-anchor fa-2x mr-4 mr-4 grey p-3 white-text rounded-circle" aria-hidden="true"></i>
                  </div>
                </div>
            </div>
            
        </div>
      </div>
    <!-- ====== metodos ====== -->


    <!-- ====== Cursos ====== -->
      <div id="multi-item-cursos" class="carousel slide carousel-multi-item pb-5 pt-2" data-ride="carousel">
      <h2 class="h1-responsive font-weight-bold text-center my-4">Nuestros cursos</h2>
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
        </ol>
        <!--/.Indicadores-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <!-- Primer slide-->
            <div class="carousel-item active">

                <div class="col-sm-4 " style="float:left">
                    <div class="grid">
                        <figure class="effect-kira">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"  alt="img05"/>
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
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"  alt="img05"/>
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
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"  alt="img05"/>
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
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"  alt="img05"/>
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
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"  alt="img05"/>
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
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"  alt="img05"/>
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

        

        </div>
        <!--/.Slides-->

      </div>
    <!-- ====== Cursos ====== -->


    <!-- ====== Contactanos ====== -->
      <div class="card mb-4">
        <div class="card-body m-3">
            <!--heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contáctanos</h2>
            <!--descripcion-->
            <p class="text-center w-responsive mx-auto mb-5">¿Tiene usted alguna pregunta? No dude en contactarnos directamente. Nuestro equipo se pondrá en contacto contigo en cuestión de horas para ayudarte.</p>

            <div class="row">
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">Tu nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">Tu email</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">Asunto</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                    <label for="message">Tu mensaje</label>
                                </div>

                            </div>
                        </div>
                    </form>

                    <div class="text-center text-md-left">
                        <a class="btn rounded bg-ce4 text-white" onclick="document.getElementById('contact-form').submit();">Enviar</a>
                    </div>
                    <div class="status"></div>
                </div>

                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>Direccion, CA Santiago, Chile</p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>+ 01 234 567 89</p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>contacto@casaeduca.cl</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
      </div>
    <!-- ====== Contactanos ====== -->
    </div>
@endsection