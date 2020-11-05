@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card border-0 mx-5 my-5 p-5 color-ce0 text-center">
        <div class="card-body">
          <img width="200" src="{{ asset('public/img/LOGO.png') }}"/>
          <h1 class="display-3 mt-4 h5 orange-text"> Planes Disponibles</h1>
          <div class="row">
            <div class="col-md-3">
                <a href="/AgregarAlumno">
                <div class="card" style="width: 18rem;">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player src="https://assets5.lottiefiles.com/temp/lf20_zi0rIM.json"  
                            background="transparent"  speed="1"  style="width: 300px; height: 300px;" loop  autoplay>
                        </lottie-player>
                    <div class="card-body">
                    
                        <h5 class="h5-responsive"><a class="badge bg-ce0 p-2" href="/login"><i class="fas fa-plus-circle pr-2"></i>Registrar Alumno</a></h5>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-9">
                <div class="row">
                  @foreach ($planes as $plan)
                    <div class="col-md-4">
                        <div class="card mb-4 m-1">
                          <div class="card-body color-ce0">
                            <img width="200" src="{{ asset('public/img/user.png') }}"/>
    
                            <div class="d-flex mb-1">
                                <div class="mr-auto p-2">
                                    <a class="btnce-1  font-weight-bold">Cantidad de meses:</a>
                                </div>
                                <div class="p-2"><a class="btnce-1  font-weight-bold">{{$plan->cantidad_meses}} {{$plan->cantidad_meses > 1 ? 'Meses' : 'Mes'}}</a></div>
                            </div>
    
                            <div class="d-flex mb-1">
                                <div class="mr-auto p-2">
                                    <a class="btnce-1  font-weight-bold">Precio:</a>
                                </div>
                                <div class="p-2"><a class="btnce-1  font-weight-bold">${{$plan->precio}}</a></div>
                            </div>
    
                            <form action="/procesarRenovacion" method="POST">
                                @csrf  
                                <input type="hidden" name="idPlan" value="{{$plan->idplan}}">
                                <input type="hidden" name="idAlumno" value="{{$idAlumno}}">
                                <button type="submit" class="btn btn-lg bg-ce0 text-white font-weight-bold rounded-lg pagarPlan">Renovar</button>
                            </form>
    
                            </div>
                        </div>
                    </div>
                  @endforeach
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@extends('layouts.app')


     
@endsection