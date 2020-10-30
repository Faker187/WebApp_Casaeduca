@extends('layouts.portalAlumnoLayout')

@section('content')
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
  height: 330px;
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
</style>

<div class="container-fluid px-0 bg-ce0  mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-white mx-auto pl-5">
            <div class="d-flex mb-3">
                <div class="mr-auto p-2">
                    <h3 class="card-title h3-responsive pt-3 mb-2 font-weight-bold text-white">
                        <img class="card-img" src="{{ asset('img/LIBROS.png') }}" style="width: 80px;margin-bottom: 1rem;" alt="pagina web">
                        <strong>{{$nombreCurso}}</strong>
                    </h3>
                </div>
                <div class="p-2 pt-3 mb-2">
                    <a class="h4-responsive text-white dropdown-toggle  mr-4"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="color-ce5 fas fa-cog"></i> Ajustes</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Editar Cuenta</a>
                        <a class="dropdown-item" href="#">Editar Plan</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Cerrar Sesión</a>
                    </div>
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
                    <img class="card-img-top" src="{{ asset('storage/'.$asignatura->imagen) }}"
                        alt="Card image cap">
                    <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>
                <div class="card-body" style="background-color: {{$asignatura->color}}">
                    <div class="d-flex">
                        <h4 class="card-title text-white">{{$asignatura->nombre}}</h4>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="mr-auto p-2">
                            <a class="btnce-1 text-white font-weight-bold" href="/Asignatura/{{$asignatura->idasignatura}}"><i class="fas fa-share color-ce5 px-1"></i>Ir a la clase</a>
                        </div>
                        <div class="p-2"><a class="btnce-1 text-white font-weight-bold contactarProfesor" 
                          idProfesor="{{$asignatura->idprofesor}}" 
                          idAsignatura="{{$asignatura->idasignatura}}"
                          idAlumno="{{$idAlumno}}"><i class="fas fa-comment color-ce5 px-1"></i>Mensaje</a></div>
                    </div>
                    <div class="jqmeter-container" title="Progreso de asignatura"></div>
                </div>
            </div>
        </div>
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

@endsection