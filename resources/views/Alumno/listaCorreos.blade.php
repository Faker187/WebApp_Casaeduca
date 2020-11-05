
@if ($correos->count() == 0)
    <p>No hay correos en esta asignatura este mes!</p>
@endif


{{-- {{dd($correos)}} --}}
@foreach ($correos as $correo)

<div>
    <div class="card-body" style="border: 1px solid; border-radius: 25px;">
      <h5 class="card-title">{{$correo->asunto}}</h5>
      <p class="card-text">{{$correo->mensaje}}</p>
      <p>{{$correo->fecha}}</p>
 
      <hr>
      <p>Respuesta profesor:</p>
      @if ($correo->respuesta == null)
          <p>No hay respuesta aún.</p>
      @else
          <p>{{$correo->respuesta->mensaje}}</p>
          <p>{{$correo->respuesta->fecha}}</p>
      @endif
    
    </div>
  </div>
  <br>
    
@endforeach

