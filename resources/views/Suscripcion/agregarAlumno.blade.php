@extends('layouts.app')

@section('content')

@php
    

@endphp


<div class="container color-ce4">

    <div id="seccionPago">
        <br>
        <img width="300" src="{{ asset('public/img/LOGO.png') }}"/>
        <h1 class="text-center display-3 mt-5 h5 orange-text"> Cual es tu Curso?</h1>
        <br>
        <hr class="slash-1">
        <br>
        <div class="row my-5">

          
                <div class="col-md-3 mb-4">
                    <a class="cursoPago font-weight-bold color-ce0" href="obtenerPlanes/1">
                    <center><img src="{{ asset('public/img/number1.svg') }}" width="100vh" alt="Card image cap"></center>
                    <p class="text-center">Primero Básico</p>
                    </a>
                </div>
            
          
            
                <div class="col-md-3 mb-4">
                    <a class="cursoPago font-weight-bold color-ce0" href="obtenerPlanes/2">
                    <center> <img  src="{{ asset('public/img/number2.svg') }}" width="100vh" alt="Card image cap"></center>
                    <p class="text-center">Segundo Básico</p>
                    </a>
                </div>
            

           
                <div class="col-md-3 mb-4">
                    <a class="cursoPago font-weight-bold color-ce0" href="obtenerPlanes/3">
                    <center><img  src="{{ asset('public/img/number3.svg') }}" width="100vh" alt="Card image cap"></center>
                    <p class="text-center">Tercero Básico</p>
                    </a>
                </div>
            
            
            
                <div class="col-md-3 mb-4">
                    <a class="cursoPago font-weight-bold color-ce0" href="obtenerPlanes/4">
                    <center><img  src="{{ asset('public/img/number4.svg') }}" width="100vh" alt="Card image cap"></center>
                    <p class="text-center">Cuarto Básico</p>
                    </a>
                </div>
            

           
                <div class="col-md-3 mb-4">
                    <a class="cursoPago font-weight-bold color-ce0" href="obtenerPlanes/5">
                    <center><img  src="{{ asset('public/img/number5.svg') }}" width="100vh" alt="Card image cap"></center>
                    <p class="text-center">Quinto Básico</p>
                    </a>
                </div>
            

            
                <div class="col-md-3 mb-4">
                    <a class="cursoPago font-weight-bold color-ce0" href="obtenerPlanes/6">
                    <center><img  src="{{ asset('public/img/number6.svg') }}" width="100vh" alt="Card image cap"></center>
                    <p class="text-center">Sexto Básico</p>
                    </a>
                </div>
            

            
                <div class="col-md-3 mb-4">
                    <a class="cursoPago font-weight-bold color-ce0" href="obtenerPlanes/7">
                    <center><img  src="{{ asset('public/img/number7.svg') }}" width="100vh" alt="Card image cap"></center>
                    <p class="text-center">Séptimo Básico</p>
                    </a>
                </div>
            

            
                <div class="col-md-3 mb-4">
                    <a class="cursoPago font-weight-bold color-ce0" href="obtenerPlanes/8">
                    <center><img src="{{ asset('public/img/number8.svg') }}" width="100vh" alt="Card image cap"></center>
                    <p class="text-center">Octavo Básico</p>
                    </a>
                </div>
            
        </div>

    </div>
    
@endsection