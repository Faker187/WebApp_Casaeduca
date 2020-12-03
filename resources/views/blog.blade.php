@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #fff !important;
    }
</style>
<div class="container-fluid px-0 bg-ce0 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-white mx-auto pl-5 overflow-hidden">
            <div class="text-white text-left py-5 px-4 my-5">
              <div class="cursodatacard">
                <h2 class="card-title h1-responsive pt-3 mb-2 animated lightSpeedIn slower color-ce2 font-weight-bold text-center">
                    <img class="card-img" src="{{ asset('public/img/blog.svg') }}" style="width: 70px;margin-bottom: 1rem;" alt="regla corazon">
                    <strong>Revista</strong>
                </h2>
                <!-- <p class="mb-2 animated lightSpeedIn slower delay-3s color-ce2 text-center">Nuestras noticias</p> -->
                <br>
                <br>
                <br>
              </div>
            </div>
        </div>
    </div>
</div>
<div class="container my-5 ">
  <div class="row justify-content-center">
    @if(count($revistas) == 1)
      <div class="col-sm-3 mb-5">
    @else
      <div class="col-sm-12 mb-5">
    @endif
      <div class="card-group">
       @foreach ($revistas as $revista)

      <div class="card m-2 animated wow fadeInUp">
        <div class="card1-header">
            <img class="w-100" src="{{ asset('public/imgcard/'.$revista->imagen) }}" alt="card">
        </div>
        <div class="card1-body">
            <span class="tag1 tag1-teal" style="background-color: {{$revista->color}}">
                {{$revista->tema}}
            </span>
            <h4>{{$revista->titulo}}</h4>
            <div class="user1">
                <div class="user1-info">
                    <div>{{$revista->autor}}</div>
                    <small>{{$revista->fecha}}</small>
                </div>
            </div>
            <br>
            <a href="/DetalleRevista/{{$revista->id}}" class="btn btn-block" style="background-color: {{$revista->color}}; color: white;">Ver más</a>

            <br>
        </div>
      </div>

       @endforeach
      </div> 
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 my-4">
        <div class="d-flex justify-content-center">
            <img class="img-fluid animated wow fadeInUp" src="{{ asset('public/img/MANO_B.png') }}" style="width: 150px;" alt="">
        </div>
    </div>
  </div>
</div>
@endsection