@extends('layouts.app')

@section('content')
<style>
.sidenav {
    width: 40vh;
    position: fixed;
    top: 18%;
    overflow-x: hidden;
    margin: 1rem;
}
.sidenav .side-body{
    background: #fff;
    padding: 2em;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;position: absolute;}
  .sidenav a {font-size: 18px;}
}
@media screen and (width: 1980px) {
  .cursodatacard {
    margin-left: auto!important;
    margin-right: auto!important;
  }
}
@media only screen and (max-width: 575px) {
    #divcurso{
        position:initial;
    }
} 
</style>
{{-- {{dd($curso)}} --}}
<div class="container-fluid px-0 bg-ce1 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-white mr-auto pl-5">
            <div class="text-white text-left py-5 px-4 my-5">
              <div class="cursodatacard">
                <h2 class="card-title h1-responsive pt-3 mb-2 font-bold color-ce0">
                    <img class="card-img" src="{{ asset('public/img/SOMBRERO.png') }}" style="width: 120px;margin-bottom: 1rem;" alt="sombrero">
                    <strong>{{$curso->nombre}}</strong>
                </h2>
                <p class="mb-2 color-ce0">En este encontraremos las asignaturas de:</p>
                <div class="col-md-8">
                    @foreach ($curso->asignaturas as $asignatura)
                        <span class="badge badge-pill" style="background-color: {{$asignatura->color}}">{{$asignatura->nombre}}</span>
                    @endforeach
                </div>
               
               
              </div>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-7 mr-auto">
            <!-- <div class="card w-100 text-dark bg-ce5 mb-5">
                <div class="card-body">
                    <h5 class="card-title pr-2 color-ce3">Lo que aprenderás</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <li class="pr-2 m-3 card-text"><i class="fas fa-check pr-2 color-ce3"></i> Lorem ipsum dolor sit amet.</li>
                            <li class="pr-2 m-3 card-text"><i class="fas fa-check pr-2 color-ce3"></i> Lorem ipsum dolor sit amet.</li>
                            <li class="pr-2 m-3 card-text"><i class="fas fa-check pr-2 color-ce3"></i> Lorem ipsum dolor sit amet.</li>
                        </div>
                        <div class="col-md-6">
                            <li class="pr-2 m-3 card-text"><i class="fas fa-check pr-2 color-ce3"></i> Lorem ipsum dolor sit amet.</li>
                            <li class="pr-2 m-3 card-text"><i class="fas fa-check pr-2 color-ce3"></i> Lorem ipsum dolor sit amet.</li>
                            <li class="pr-2 m-3 card-text"><i class="fas fa-check pr-2 color-ce3"></i> Lorem ipsum dolor sit amet.</li>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="card w-100 border-0">
                <div class="card-body">
                    <h5 class="card-title pr-2 color-ce3">Descripción</h5>
                    <p class="card-text text-justify">{!!$curso->descripcion!!}</p>
                </div>
            </div>
            <div class="card border-0 align-items-center my-2">
                <img class="img-fluid " src="{{ asset('public/img/MANO_A.png') }}" style="width: 180px;margin-bottom: 1rem;" alt="camara">
            </div>
        </div>
        <div class="col-md-5">
            <div id="divcurso" class="sidenav z-depth-1 border rounded-top">
                <div class="sideimg">
                    <img class="w-100" src="{{ asset('public/img/'.$curso->imagen) }}" alt="niña estudiando">
                </div>
                <div class="side-body">
                    <h5 class="h5-responsive mb-3">Desde ${{$curso->precioPlan}}<strong class="text-muted"> CLP</strong></h5>
                    <a href="/suscribete" class="btn btn-block bg-ce0 text-white pb-3">Suscribirse</a>
                    <hr>
                    <span class="card-text py-2 font-weight-bold">Este curso incluye:</span>
                    <li class="card-text m-1 pt-3 p-1"><i class="fas fa-history pr-3 color-ce3"></i>Seguimiento.</li>
                    <li class="card-text m-1 p-1"><i class="fas fa-crown  pr-3 color-ce3"></i>Contenido del curso ilimitado .</li>
                    <li class="card-text m-1 p-1"><i class="fas fa-user-graduate color-ce3 pr-3"></i>8 preguntas al profesor(cda/mes).</li>
                    {{-- <li class="card-text m-1 p-1"><i class="fab fa-youtube color-ce3 pr-3"></i>1 video clase al mes.</li> --}}
                    <hr class="my-4">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection