@extends('Administrador.admin')

@section('content')

@php
    $url = url()->current();
    $idCurso = explode('/',$url);
    $idCurso = intval(end($idCurso));
@endphp

<h1 class="mt-4">Clases - {{$nombreCurso}}</h1>

<br>

<div class="table-responsive">
    <table class="table table-bordered" id="dataTableEsp" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Unidad</th>
                <th>Asignatura</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Unidad</th>
                <th>Asignatura</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($clases as $clase)
            <tr>
                <td>{{$clase->nombre}}</td>
                <td>{{$clase->nombreUnidad}}</td>
                <td>{{$clase->nombreAsignatura}}</td>
                
                <td class="text-center">
                    <button class="btn btn-primary editarClase" idClase="{{$clase->idclase}}" idCurso="{{$idCurso}}"><i class="fas fa-edit"></i></button>
                </td>
                <td class="text-center">
                    <button class="btn btn-primary eliminarClase" idClase="{{$clase->idclase}}" idCurso="{{$idCurso}}"><i class="fas fa-trash-alt"></i></button>
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


<!-- Modal Agregar Clase -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Agregar Clase</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form id="formAgregarClase" action="/agregarClase" method="POST">
        @csrf
        <div class="modal-body">
            <input type="text" name="nombre" class="form-control mb-4" placeholder="Nombre" required>

            <select class="form-control selectAsignatura" name="idAsignatura">
                <option value="">Seleccione asignatura</option>
                @foreach ($asignaturas as $asignatura)
                <option value="{{$asignatura->idasignatura}}">{{$asignatura->nombre}}</option>
                @endforeach
            </select>
            <br>
            <div id="selectUnidades">

            </div>

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



  <!-- Modal editar Clase-->
  <div class="modal fade" id="modalEditarClase" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Clase</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formEditarClase" action="/editarClase" method="POST">
        @csrf
        <div id="divEditarClase" class="modal-body">
            {{-- ... --}}
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


