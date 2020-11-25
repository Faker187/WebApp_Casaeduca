@extends('layouts.app')

@section('content')
<style>
    body {
        background-image: url("../public/img/fondocielo.jpg")!important;
        height: auto !important; 
        width: 200hv!important;
        padding: 0px;
    }
</style>
<div class="container-fluid px-0 bg-ce0 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-white mx-auto pl-5 overflow-hidden">
            <div class="text-white text-left py-5 px-4 my-5">
              <div class="cursodatacard">
                <h2 class="card-title h1-responsive pt-3 mb-2 animated lightSpeedIn slower color-ce1 font-weight-bold text-center">
                    <img class="card-img" src="{{ asset('public/img/correo.svg') }}" style="width: 70px;margin-bottom: 1rem;" alt="pagina web">
                    <strong>Contacto Casa Educa</strong>
                </h2>
                <p class="mb-2 color-ce1 animated lightSpeedIn slower delay-3s text-center">¿Quieres obtener información acerca de nuestros planes? Contáctenos, nos comunicaremos contigo en cuestión de horas para ayudarte.</p>
                <br>
                <br>
                <br>
              </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="container">
    <!-- ====== Contactanos ====== -->
        <div class="row justify-content-center mt-5">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body m-3 ">
                        <!--descripcion-->
                        <p class="text-center w-responsive mx-auto mb-5"></p>

                        <div class="row">
                            <div class="col-md-9 mb-md-0 mb-5">
                                <form id="contact-form" name="contact-form" action="/formularioContacto" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="formname" name="name" class="form-control" required>
                                                <label for="name" class="">Nombre<i class="fas fa-user pl-1"></i></label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="email" id="formemail" name="email" class="form-control" required>
                                                <label for="email" class="">Email<i class="fas fa-at pl-1"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <input type="text" id="formsubject" name="subject" class="form-control" required>
                                                <label for="subject" class="">Asunto<i class="fas fa-envelope-open-text pl-1"></i></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <textarea type="text" id="formmessage" required name="message" rows="2" class="form-control md-textarea"></textarea>
                                                <label for="message">Mensaje<i class="far fa-comment-dots pl-1"></i></label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="text-center text-md-left">
                                        <button type="submit" class="btn rounded bg-ce4 text-white">Enviar</button>
                                    </div>

                                </form>

                                
                                <div class="status"></div>
                            </div>

                            <div class="col-md-3 text-center">
                                <ul class="list-unstyled mb-0">
                                    <li><img src="{{ asset('public/img/pin-ubicacion.svg') }}" alt="correo electronico" class="" style="width: 40px;"></i>
                                        <p>{{$direccion}}</p>
                                    </li>

                                    <li><img src="{{ asset('public/img/llamada-telefonica.svg') }}" alt="correo electronico" class="" style="width: 40px;"></i>
                                        <p>{{$telefono}}</p>
                                    </li>

                                    <li><img src="{{ asset('public/img/correo-electronico.svg') }}" alt="correo electronico" class="" style="width: 40px;"></i>
                                        <p>{{$email}}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ====== Contactanos ====== -->
@endsection