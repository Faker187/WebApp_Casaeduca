@extends('layouts.app')

@section('content')

@php
    

@endphp


<div class="container">
    
    <!-- Default form login -->
<form class="text-center border border-light p-5" target="_blank" action="/procesarPago" method="POST">
    @csrf
    <p class="h4 mb-4">Elige tu Plan de estudios</p>
    <select name="curso" class="browser-default custom-select mb-4">
        <option value="" selected>¿Cual es tu curso?</option>
        @foreach ($planes as $plan)
            <option value="{{$plan->id_curso}}">{{$plan->nombre}}</option>
        @endforeach
        {{-- <option value="1">Primero Básico</option>
        <option value="2">Segundo Básico</option>
        <option value="3">Tercero Básico</option>
        <option value="4">Cuarto Básico</option>
        <option value="5">Quinto Básico</option>
        <option value="6">Sexto Básico</option>
        <option value="7">Séptimo Básico</option>
        <option value="8">Octavo Básico</option> --}}
    </select>

    <select name="plan" class="browser-default custom-select mb-4">
        <option selected>Selecciona tu Plan</option>
        <option value="1">Mensual (1 Mes)</option>
        <option value="2">Bimensual (2 Meses)</option>
        <option value="3">Trimestral (3 Meses)</option>
    </select>

 
  

    <button class="btn btn-info btn-block my-4" type="submit">Pagar</button>



</form>
<!-- Default form login -->
    
    {{-- <form action="{{$formAction}}" method="POST">
    <input type="hidden" name="token_ws" value={{$tokenWs}}>
    <button type="submit" class="btn primary">Pagar</button>
    </form> --}}
</div>
@endsection