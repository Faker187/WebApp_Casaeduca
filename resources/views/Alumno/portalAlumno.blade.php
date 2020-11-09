@extends('layouts.portalAlumnoLayout')

@section('content')

    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

    <script src="{{ asset('public/js/jqmeter.min.js') }}"></script>

    
<style>
.cards-list {
  z-index: 0;
  width: 100%;
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.card {
  margin: 30px auto;
  width: 300px;
  height: 400px;
  border-radius: 40px;
box-shadow: 5px 5px 30px 7px rgba(0,0,0,0.25), -5px -5px 30px 7px rgba(0,0,0,0.22);
  cursor: pointer;
  transition: 0.4s;
}

.card .card_image {
  width: inherit;
  height: inherit;
  border-radius: 40px!important;
}

.card .card_image img {
  width: inherit;
  height: inherit;
  border-radius: 40px;
  object-fit: cover;
}

.card .card_title {
  text-align: center;
  border-radius: 0px 0px 40px 40px;
  font-family: sans-serif;
  font-weight: bold;
  font-size: 30px;
  margin-top: -80px;
  height: 5 0px;
}

.card:hover {
  transform: scale(0.9, 0.9);
  box-shadow: 5px 5px 30px 15px rgba(0,0,0,0.25), 
    -5px -5px 30px 15px rgba(0,0,0,0.22);
}
.card-body{
    min-height: auto!important;
}
@media all and (max-width: 500px) {
  .card-list {
    flex-direction: column;
  }
}
.inner-therm span{
  font-size: smaller!important;
}
</style>

<div class="container-fluid px-0 bg-ce0  mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-white mx-auto pl-5">
            <div class="d-flex mb-3">
                <div class="mr-auto p-2">
                    <h3 class="card-title h3-responsive pt-3 mb-2 font-weight-bold text-white">
                        <img class="card-img" src="{{ asset('public/img/LIBROS.png') }}" style="width: 80px;margin-bottom: 1rem;" alt="pagina web">
                        <strong>{{$nombreCurso}}</strong>
                    </h3>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container">
    <h2 class="card-title h1-responsive pt-3 mb-2 font-bold color-ce4">
        <strong>Empecemos a aprender, {{$diminutivo}}</strong>
    </h2>

    <div class="row justify-content-lg-start py-3">
     
        @foreach ($asignaturas as $asignatura)
        <div class="col-md-4">
            <div class="card mb-4 m-1">
                <div class="view overlay">
                  @if ($asignatura->imagen != null)
                  <img class="card-img-top" src="{{ asset('public/imgcard/'.$asignatura->imagen) }}" alt="Card image cap">
                  @else
                  <img class="card-img-top" src="{{ asset('public/imgcard/sinimagen.jpg') }}" alt="Card image cap">
                  @endif
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <div class="card-body" style="background-color: {{$asignatura->color}}">
                    <div class="d-flex">
                        <h4 class="card-title text-white">{{$asignatura->nombre}}</h4>
                    </div>
                   
                   <div class="d-flex mb-1">
                    <div class="mr-auto p-2">
                        <a class="btnce-1 text-white font-weight-bold" href="/Asignatura/{{$asignatura->idasignatura}}"><i class="fas fa-share color-ce5 px-1"></i>Ir a la clase</a>
                    </div>
                    @if ($asignatura->idprofesor != 0)
                    <div class="p-2"><a class="btnce-1 text-white font-weight-bold contactarProfesor" 
                      idProfesor="{{$asignatura->idprofesor}}" 
                      idAsignatura="{{$asignatura->idasignatura}}"
                      idAlumno="{{$idAlumno}}"><i class="fas fa-comment color-ce5 px-1"></i>Mensaje</a>
                    </div>
                    @endif
                    
                </div>
                   

                    @if ($asignatura->idprofesor != 0)
                    <div class="d-flex mb-1">
                      <div class="mr-auto p-2">
                          <a class="verMisPreguntas btnce-1 text-white font-weight-bold" 
                          idProfesor="{{$asignatura->idprofesor}}" 
                          idAsignatura="{{$asignatura->idasignatura}}"
                          idAlumno="{{$idAlumno}}"
                          >
                            <i class="fas fa-envelope-square color-ce5 px-1"></i>
                          Ver mis preguntas</a> 
                          @if ($asignatura->respuestasNuevas > 0)
                            <span id="badge{{$asignatura->idasignatura}}" class="badge badge-danger">{{$asignatura->respuestasNuevas}}</span>
                          @endif
                      </div> 
                    </div>
                    @endif
                  

                    @if ($asignatura->examen != null)

                    <div class="d-flex mb-1">
                      <div class="mr-auto p-2">
                          <a href="{{$asignatura->examen}}" target="_blank" class="btnce-1 text-white font-weight-bold" >
                         
                            <i class="far fa-file-alt color-ce5 px-1"></i>
                            Tomar Examen</a> 
                      </div> 
                    </div>
                        
                    @endif
                    
                    {{-- <a class="btnce-1 text-white font-weight-bold" href="/Asignatura/{{$asignatura->idasignatura}}"><i class="fas fa-share color-ce5 px-1"></i>Ir a la clase</a>
                    <span class="badge badge-danger">4</span> --}}
                    <div class="jqmeter-containerClase{{$asignatura->idasignatura}}" title="Progreso de asignatura"></div>
                </div>
            </div>
        </div>

        <script>
            var idAsignatura = {!! json_encode($asignatura->idasignatura) !!}
            var totalClasesAsignatura = {!! json_encode($asignatura->totalClasesAsignatura) !!}
            var cantidadClasesCompletadas = {!! json_encode($asignatura->cantidadClasesCompletadas) !!}

          var status1 = (isNaN(totalClasesAsignatura));
          var status2 = (isNaN(cantidadClasesCompletadas));

          $('.jqmeter-containerClase'+idAsignatura).jQMeter({
            goal:'$'+totalClasesAsignatura,
            raised:'$'+cantidadClasesCompletadas,
            meterOrientation:'horizontal',
            width:'75%',
            height:'50px',
            barColor: '#4269B0'
          });
          $('.outer-therm').addClass('mx-auto');
          </script>

        
        @endforeach
    </div>




</div>



 <!-- Modal -->
 <div class="modal fade color-ce4" id="contactarProfesorModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Contactar Profesor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div id="modalBodyContactarProfesor" class="modal-body">



        </div>
       
      </div>
    </div>
  </div>




<!-- Modal ver mis preguntas y respuestas-->
<div class="modal fade" id="modalVerMisPreguntas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mis preguntas y respuestas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div id="bodyModalVerMisPreguntas" class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
      </div>
    </div>
  </div>
</div>





@endsection