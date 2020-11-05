@extends('layouts.app')

@section('content')

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card border-0 mx-5 my-5 p-5 color-ce0 text-center">
        <div class="card-body">
          <img width="300" src="{{ asset('public/img/LOGO.png') }}"/>
          <h2 class="display-4 mt-4 h5 orange-text"> Planes Disponibles</h2>
          <div class="row mt-5">
            <div class="col-md-10">
                <div class="row">
                  @foreach ($planes as $plan)
                    <div class="col-md-4">
                        <div class="card mb-4 m-1">
                          <div class="card-body color-ce0">
                            <img width="100" src="{{ asset('public/img/shopping-list.png') }}"/>
    
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

@endsection