@extends('layouts.app')

@section('content')
<div class="container">
<!-- ====== Contactanos ====== -->
    <div class="row justify-content-center mt-5">
        <div class="col-md-12">
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
        </div>
    </div>
</div>
<!-- ====== Contactanos ====== -->
@endsection