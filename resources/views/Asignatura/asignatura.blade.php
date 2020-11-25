@extends('layouts.app')

@section('content')

{{-- {{dd($unidades)}} --}}
<div class="row">
    <div class="accordion col-md-3" id="accordionExample">

        @foreach ($unidades as $unidad)
        <div class="card">
            <div class="card-header" id="heading{{$unidad->idunidad}}">
              <h2 class="mb-0">
                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{$unidad->idunidad}}" aria-expanded="true" aria-controls="collapse{{$unidad->idunidad}}">
                  {{$unidad->nombre}}
                </button>
              </h2>
            </div>
        
            <div id="collapse{{$unidad->idunidad}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                  <ul>
                        @foreach ($unidad->clases as $clase)
                            <li>
                                <a class="cargarClase"  href="{{$clase->idclase}}">{{$clase->nombre}}</a>
                            </li>
                        @endforeach
                  </ul>
              </div>
            </div>
          </div>
        @endforeach
    
      </div>
    
      <div id="contenidoClase" class="col-md-9">

      </div>
</div>



   
@endsection