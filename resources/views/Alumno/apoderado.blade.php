@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <img class="img-fluid border-0 mt-3 text-center" width="300" src="{{ asset('public/img/LOGO.png') }}"/>
      <h1 class="h1-responsive display-4 mt-3 h5 text-center orange-text"> Hola {{Auth::user()->name}}</h1>
      <p class="lead mb-4 pb-2 px-md-5 mx-md-5 text-center">Soy Apoderado/a de: </p>
    </div>
    <div class="col-md-12" id="apoderado_div">
      <div class="card border-0 my-5 color-ce0 text-center">
        <div class="card-body">
          <div class="row">
            <div class="col-md-3">
                <a href="/AgregarAlumno">
                <div class="card mx-auto mb-4" style="width: 16rem;">
                    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <lottie-player src="https://assets5.lottiefiles.com/temp/lf20_zi0rIM.json"  
                            background="transparent"  speed="1"  style="width: 250px; height: 300px;" loop  autoplay>
                        </lottie-player>
                    <div class="card-body">
                    
                        <h5 class="h5-responsive badge bg-ce0 p-2"><i class="fas fa-plus-circle pr-2"></i>Registrar Alumno</h5>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-9">
                <div class="row">
                  @foreach ($alumnos as $alumno)
                    <div class="col-md-4 cardxs mx-auto">
                        <div class="card mb-4 m-1">
                          <div class="card-body color-ce0">
                            <img width="200" src="{{ asset('public/img/user.png') }}"/>
                            <div class="d-flex mb-1">
                                <div class="mr-auto p-2">
                                    <a id="nombreAlumno{{$alumno->id}}" class="btnce-1  font-weight-bold" >{{$alumno->nombre}}</a>
                                </div>
                                <div class="p-2"><a class="btnce-1  font-weight-bold"><i class="fas fa-pencil-alt cambiarNombreAlumno" idAlumno="{{$alumno->id}}" style="color: #4269B0"></i></a></div>
                            </div>
            
                            <div class="d-flex mb-1">
                                <div class="mr-auto p-2">
                                    <a class="btnce-1  font-weight-bold">Curso:</a>
                                </div>
                                <div class="p-2"><a class="btnce-1  font-weight-bold"></a>{{$alumno->nombreCurso}}</div>
                            </div>
    
                            <div class="d-flex mb-1">
                                <div class="mr-auto p-2">
                                    <a class="btnce-1  font-weight-bold">Plan:</a>
                                </div>
                                <div class="p-2"><a class="btnce-1  font-weight-bold">{{$alumno->meses}}</a></div>
                            </div>
    
                            <div class="d-flex mb-1">
                                <div class="mr-auto p-2">
                                    <a class="btnce-1  font-weight-bold">Fecha Inicio:</a>
                                </div>
                                <div class="p-2"><a class="btnce-1  font-weight-bold">{{$alumno->fecha_pago}}</a></div>
                            </div>
    
                            <div class="d-flex mb-1">
                                <div class="mr-auto p-2">
                                    <a class="btnce-1  font-weight-bold">Fecha Término:</a>
                                </div>
                                <div class="p-2"><a class="btnce-1  font-weight-bold">{{$alumno->fin_plan}}</a></div>
                            </div>
    
                            <div class="d-flex mb-3">
                                <div class="mr-auto p-2">
                                    <a class="btnce-1  font-weight-bold">Estado:</a>
                                </div>
                                @if ($alumno->estado == 1)
                                <div class="p-2"><a class="btnce-1  font-weight-bold">Activo</a></div>
                                @else
                                <div class="p-2"><a class="btnce-1  font-weight-bold">Inactivo</a></div>
                                @endif
                            </div>
    
                            @if ($alumno->estado == 1)
                            <a href="/Alumno/{{$alumno->id}}" class="btn btn-lg bg-ce0 text-white font-weight-bold rounded-lg">Comenzar a estudiar</a>
                            @else
                            <a href="/planesRenovar/{{$alumno->id}}" class="btn btn-lg bg-ce0 text-white font-weight-bold rounded-lg">Renovar</a>
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
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
@endsection