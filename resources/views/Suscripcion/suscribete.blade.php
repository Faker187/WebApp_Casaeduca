@extends('layouts.app')

@section('content')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
<div class="container">

<div class="row justify-content-center">
    <div class="wrapper fadeIn">
        <div id="formContent" >
            
            <div class="fadeIn first pt-5">
                <img src="{{ asset('img/LOGO.png') }}" id="icon" alt="LOGO">
            </div>

            {{-- <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <h2 class="active" id="pills-crearcuenta-tab" data-toggle="pill" href="#pills-crearcuenta" role="tab" aria-controls="pills-crearcuenta" aria-selected="true">Crear cuenta </h2>
                </li>
                <li class="nav-item">
                    <h2 class="inactive underlineHover" id="pills-Renovar-tab" data-toggle="pill" href="#pills-Renovar" role="tab" aria-controls="pills-Renovar" aria-selected="false">Renovar supcripción </h2>
                </li>
            </ul> --}}
            
            
            
            <div class="tab-content pt-2 pl-1" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-crearcuenta" role="tabpanel" aria-labelledby="pills-crearcuenta-tab">

                  <form  action="/crearSuscripcion" method="POST">
                    @csrf
                        <input type="text" id="nombreCompletoApoderado" name="nombreCompletoApoderado" class="fadeIn second " placeholder="Nombre Completo Apoderado">
        
                        {{-- <input type="text" id="nombreCompletoAlumno" name="nombreCompletoAlumno" class="fadeIn second mb-4" placeholder="Nombre Completo Alumno"> --}}

                        {{-- <select name="genero" name="genero" class="fadeIn third browser-default mb-4">
                            <option value="" selected>Selecciona tu género</option>
                            <option value="0">Otro / No Aplica</option>
                            <option value="1">Niño</option>
                            <option value="2">Niña</option>
                        </select> --}}

                        <input id="email" type="email" class="fadeIn third" name="email" autocomplete="email" placeholder="Correo Electrónico" required>

                        <input id="password" type="password" class="fadeIn fourth @error('password') is-invalid @enderror" placeholder="Contraseña" name="password" required autocomplete="current-password">

                        <input type="password" name="repeatPassword" id="repeatPassword" class="fadeIn fourth mb-4" placeholder="Repetir contraseña">

                        <input type="submit" class="fadeIn fourth" value="Suscribirme">
                  </form>

                </div>

                {{-- <div class="tab-pane fade" id="pills-Renovar" role="tabpanel" aria-labelledby="pills-Renovar-tab">
                    <form  action="/renovarSuscripcion" method="POST">
                      @csrf
                        <input id="email" type="email" class="fadeIn second @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo Electrónico">

                        <select name="curso" class="fadeIn third browser-default ">
                            <option selected>¿Cual es tu curso?</option>
                            <option value="1">Primero Básico</option>
                            <option value="2">Segundo Básico</option>
                            <option value="3">Tercero Básico</option>
                            <option value="4">Cuarto Básico</option>
                            <option value="5">Quinto Básico</option>
                            <option value="6">Sexto Básico</option>
                            <option value="7">Séptimo Básico</option>
                            <option value="8">Octavo Básico</option>
                        </select>

                        <select name="plan" class="fadeIn third browser-default ">
                            <option selected>Selecciona tu Plan</option>
                            <option value="1">Mensual (1 Mes)</option>
                            <option value="2">Bimensual (2 Meses)</option>
                            <option value="3">Trimestral (3 Meses)</option>
                        </select>

                        <input type="submit" class="fadeIn fourth" value="Renovar">
                    </form>
                </div> --}}
            </div>


        </div>
    </div>
</div>

<!-- <div class="row">

    <div class="col-md-5">
        <form class="text-center border border-light p-5" action="/renovarSuscripcion" method="POST">
        @csrf

        <h3 class="mb-3">¿Quiéres renovar tu suscripción?</h3>

        <input type="email" name="email" id="email" class="form-control mb-4" placeholder="Correo Electrónico">

        <select name="curso" class="browser-default custom-select mb-4">
            <option selected>¿Cual es tu curso?</option>
            <option value="1">Primero Básico</option>
            <option value="2">Segundo Básico</option>
            <option value="3">Tercero Básico</option>
            <option value="4">Cuarto Básico</option>
            <option value="5">Quinto Básico</option>
            <option value="6">Sexto Básico</option>
            <option value="7">Séptimo Básico</option>
            <option value="8">Octavo Básico</option>
        </select>

        <select name="plan" class="browser-default custom-select mb-4">
            <option selected>Selecciona tu Plan</option>
            <option value="1">Mensual (1 Mes)</option>
            <option value="2">Bimensual (2 Meses)</option>
            <option value="3">Trimestral (3 Meses)</option>
        </select>

        <button class="btn btn-info btn-block my-4" type="submit">Renovar Suscripción</button>

        </form>
    </div>


    <div class="col-md-1"></div>

    <div class="col-md-5">

        <form class="text-center border border-light p-5 " action="/crearSuscipcion" method="POST">
            @csrf
            <h3 class="mb-5">¿Eres nuevo? Suscríbete</h3>

            <input type="text" id="nombreCompletoApoderado" name="nombreCompletoApoderado" class="form-control mb-4" placeholder="Nombre Completo Apoderado">
            
            <input type="text" id="nombreCompletoAlumno" name="nombreCompletoAlumno" class="form-control mb-4" placeholder="Nombre Completo Alumno">

            <select name="genero" name="genero" class="browser-default custom-select mb-4">
                <option value="" selected>Selecciona tu género</option>
                <option value="0">Otro / No Aplica</option>
                <option value="1">Hombre</option>
                <option value="2">Mujer</option>
            </select>

            {{-- <select name="curso" class="browser-default custom-select mb-4">
                <option value="" selected>¿Cual es tu curso?</option>
                <option value="1">Primero Básico</option>
                <option value="2">Segundo Básico</option>
                <option value="3">Tercero Básico</option>
                <option value="4">Cuarto Básico</option>
                <option value="5">Quinto Básico</option>
                <option value="6">Sexto Básico</option>
                <option value="7">Séptimo Básico</option>
                <option value="8">Octavo Básico</option>
            </select> --}}

            {{-- <select name="plan" class="browser-default custom-select mb-4">
                <option selected>Selecciona tu Plan</option>
                <option value="1">Mensual (1 Mes)</option>
                <option value="2">Bimensual (2 Meses)</option>
                <option value="3">Trimestral (3 Meses)</option>
            </select> --}}

            <input type="email" name="email" id="email" class="form-control mb-4" placeholder="Correo Electrónico">
            
            <input type="password" name="password" id="password" class="form-control mb-4" placeholder="Contraseña">

            <input type="password" name="repeatPassword" id="repeatPassword" class="form-control mb-4" placeholder="Repetir contraseña">

            <button class="btn btn-info btn-block my-4" type="submit">Suscribirme</button>

        </form>

    </div>



</div> -->


</div>
@endsection
