@extends('layouts.app')

@section('content')
<link href="{{ asset('public/css/login.css') }}" rel="stylesheet">
<div class="container">

    <div class="row justify-content-center">
        <div class="wrapper fadeIn">
            <div id="formContent" >
                
                <div class="fadeIn first pt-5">
                    <img src="{{ asset('public/img/LOGO.png') }}" id="icon" alt="LOGO">
                </div>     
                
                <div class="tab-content pt-2 pl-1" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-crearcuenta" role="tabpanel" aria-labelledby="pills-crearcuenta-tab">

                    <form  id="formSuscribirse" action="/crearSuscripcion" method="POST">
                        @csrf
                        <input type="text" id="nombreCompletoApoderado" name="nombreCompletoApoderado" class="fadeIn second " placeholder="Nombre Completo Apoderado" required>
        
                        <input id="email" type="email" class="fadeIn third" name="email" autocomplete="email" placeholder="Correo Electrónico" required>

                        <input id="password" type="password" class="fadeIn fourth @error('password') is-invalid @enderror" placeholder="Contraseña" name="password" required autocomplete="current-password">

                        <input type="password" name="repeatPassword" id="repeatPassword" class="fadeIn fourth mb-4" placeholder="Repetir contraseña" required>

                        <input type="submit" id="submitSuscribete" class="fadeIn fourth" value="Suscribirme">
                    </form>

                    </div>
                </div>


            </div>
        </div>
    </div>

</div>




@endsection
