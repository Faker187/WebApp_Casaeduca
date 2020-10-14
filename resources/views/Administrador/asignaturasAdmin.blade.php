@extends('Administrador.admin')

@section('content')
<h1 class="mt-4">Asignaturas - {{$nombreCurso}}</h1>
<br>

<div class="table-responsive">
    <table class="table table-bordered" id="dataTableEsp" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Curso</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Curso</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($asignaturas as $asignatura)
            <tr>
                <td>{{$asignatura->nombre}}</td>
                @switch($asignatura->idcurso)
                @case(1)
                <td>Primero Básico</td>
                    @break
                @case(2)
                <td>Segundo Básico</td>
                    @break
                @case(3)
                <td>Tercero Básico</td>
                    @break
                @case(4)
                <td>Cuarto Básico</td>
                    @break
                @case(5)
                <td>Quinto Básico</td>
                    @break
                @case(6)
                <td>Sexto Básico</td>
                    @break
                @case(7)
                <td>Séptimo Básico</td>
                    @break
                @case(8)
                <td>Octavo Básico</td>
                    @break
                @default
                    
            @endswitch
            <td class="text-center">
                <button class="btn btn-primary editarAsignatura" idAsignatura="{{$asignatura->idasignatura}}"><i class="fas fa-edit"></i></button>
              </td>
              <td class="text-center">
                <button class="btn btn-primary eliminarAsignatura" idAsignatura="{{$asignatura->idasignatura}}"><i class="fas fa-trash-alt"></i></button>
              </td>
            </tr>
            @endforeach
          
        </tbody>
    </table>
</div>


<br>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
    Agregar Nuevo
  </button>
  
  @php
      $url = url()->current();
      $idCurso = explode('/',$url);
      $idCurso = intval(end($idCurso));
  @endphp
  <!-- Modal Agregar Asignatura -->
  <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Asignatura</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="formAgregarAsignatura" action="/agregarAsignatura" method="POST">
            @csrf
            <div class="modal-body">
                <input type="text" name="nombre" class="form-control mb-4" placeholder="Nombre" required>
                <input type="hidden" name="idCurso" value="{{$idCurso}}">
            </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Agregar</button>
              </div>
        </form>
      </div>
    </div>
  </div>




<!-- Modal editar Asignatura-->
<div class="modal fade" id="modalEditarAsignatura" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Asignatura</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formEditarAsignatura" action="/editarAsignatura" method="POST">
        @csrf
        <div id="divEditarAsignatura" class="modal-body">
            {{-- <input type="text" name="nombre" class="form-control mb-4" placeholder="Nombre" required>
            <input type="email" name="email" class="form-control mb-4" placeholder="Correo Electrónico" required> --}}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Editar</button>
          </div>
    </form>
    </div>
  </div>
</div>


@endsection


