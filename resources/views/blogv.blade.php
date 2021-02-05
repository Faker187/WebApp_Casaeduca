@extends('layouts.app')


@section('content')
<div class="container-fluid px-0 bg-ce2 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-white mx-auto pl-5 overflow-hidden">
            <div class="text-white text-left py-5 px-4 my-5">
              <div class="aa">
                <h2 class="card-title h1-responsive pt-3 mb-2 font-bold color-ce4 text-center">
                    <img class="card-img" src="{{ asset('public/img/noticias.svg') }}" style="width: 70px;margin-bottom: 1rem;" alt="pagina web">
                    <strong>Noticias Casa Educa</strong>
                </h2>
                <br>
                <br>
                <br>
              </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card w-100 border-0">
                <div class="card-body mx-auto">
                    <!-- Desarrollo Blog -->
                    <h1 class="card-title text-center">{{$revista->titulo}}</h1>
                    <img style=" width: 200px; " src="{{ asset('public/imgcard/'.$revista->imagen) }}" class="img-fluid">
                    <p class="text-justify mx-auto mt-3">{!!$revista->contenido!!}</p>
                    <p class="text-justify">{{$revista->autor}} - {{$revista->fecha}}</p>
                    <!-- Desarrollo Blog -->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection