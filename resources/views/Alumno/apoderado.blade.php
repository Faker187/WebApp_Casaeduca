@extends('layouts.app')

@section('content')

<div class="container color-ce4">
    {{-- {{dd(Auth::user())}} --}}
    <div class="jumbotron">
        <h2 class="card-title h1-responsive pt-3 mb-2 font-bold color-ce4">
          <strong>Hola {{Auth::user()->name}}</strong>
        </h2>
        <br>
        <p>Soy Apoderado/a de:</p>
        <br>

        <div class="row">

          <div class="col-md-4">
            <a href="/AgregarAlumno">
              <div class="card" style="width: 18rem;">
                  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                      <lottie-player src="https://assets5.lottiefiles.com/temp/lf20_zi0rIM.json"  
                          background="transparent"  speed="1"  style="width: 300px; height: 300px;" loop  autoplay>
                      </lottie-player>
                  <div class="card-body">
                    <h3>Registrar Alumno</h3>
                  </div>
              </div>
          </a>
          </div>

          @foreach ($alumnos as $alumno)
            
              <div class="col-md-4">
                <div class="card mb-4 m-1">
                  <div class="view overlay">
                  </div>
                  <div class="card-body danger-color">
                      <div class="d-flex">
                      
                      </div>
                      <div class="d-flex mb-3">
                          <div class="mr-auto p-2">
                              <a id="nombreAlumno{{$alumno->id}}" class="btnce-1 text-white font-weight-bold" >{{$alumno->nombre}} </a>
                          </div>
                          <div class="p-2"><a class="btnce-1 text-white font-weight-bold"><i class="fas fa-pencil-alt cambiarNombreAlumno" idAlumno="{{$alumno->id}}" style="color: white"></i></a></div>
                      </div>
      
                      <div class="d-flex mb-3">
                        <div class="mr-auto p-2">
                            <a class="btnce-1 text-white font-weight-bold">Curso:</a>
                        </div>
                        <div class="p-2"><a class="btnce-1 text-white font-weight-bold">{{$alumno->nombreCurso}}</a></div>
                      </div>

                      <div class="d-flex mb-3">
                        <div class="mr-auto p-2">
                            <a class="btnce-1 text-white font-weight-bold">Plan:</a>
                        </div>
                        <div class="p-2"><a class="btnce-1 text-white font-weight-bold">{{$alumno->meses}}</a></div>
                      </div>

                      <div class="d-flex mb-3">
                        <div class="mr-auto p-2">
                            <a class="btnce-1 text-white font-weight-bold">Fecha Inicio:</a>
                        </div>
                        <div class="p-2"><a class="btnce-1 text-white font-weight-bold">{{$alumno->fecha_pago}}</a></div>
                      </div>

                      <div class="d-flex mb-3">
                        <div class="mr-auto p-2">
                            <a class="btnce-1 text-white font-weight-bold">Fecha Término:</a>
                        </div>
                        <div class="p-2"><a class="btnce-1 text-white font-weight-bold">{{$alumno->fin_plan}}</a></div>
                      </div>

                      <div class="d-flex mb-3">
                        <div class="mr-auto p-2">
                            <a class="btnce-1 text-white font-weight-bold">Estado:</a>
                        </div>
                        @if ($alumno->estado == 1)
                        <div class="p-2"><a class="btnce-1 text-white font-weight-bold">Activo</a></div>
                        @else
                        <div class="p-2"><a class="btnce-1 text-white font-weight-bold">Inactivo</a></div>

                        @endif
                      </div>

                      @if ($alumno->estado == 1)
                      <a href="/Alumno/{{$alumno->id}}" class="btn btn-block purple-gradient">Comenzar a estudiar</a>
                      @else
                      {{-- <a href="/Renovar/{{$alumno->id}}" class="btn btn-block purple-gradient">Renovar</a> --}}
                      <a href="/planesRenovar/{{$alumno->id}}" class="btn btn-block purple-gradient">Renovar</a>
                      @endif

      
                    
      
                  
      
                  </div>
              </div>
              </div>




              <!-- Modal -->
                <div class="modal fade" id="modalNombreAlumno{{$alumno->id}}" tabindex="-1" aria-labelledby="modalNombreAlumnoLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalNombreAlumnoLabel">Cambiar nombre</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <form action="/CambiarNombreAlumno" method="post">
                      <div class="modal-body">
                        @csrf
                          <input type="text" name="nombre" value="{{$alumno->nombre}}" class="form-control mb-4" placeholder="Nombre" required>
                          <input type="hidden" name="idAlumno" value="{{$alumno->id}}">                  
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Cambiar Nombre</button>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>

          @endforeach

        </div>

        <!-- Button trigger modal -->


      

     
@endsection