@extends('Administrador.admin')

@section('content')
<h1 class="mt-4">Unidades - {{$nombreCurso}}</h1>
<br>

<div class="table-responsive">
    <table class="table table-bordered" id="dataTableEsp" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Asignatura</th>
                <th>URL Examen</th>
                <th>Password</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Asignatura</th>
                <th>URL Examen</th>
                <th>Password</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($unidades as $unidad)
            <tr>
                <td>{{$unidad->nombre}}</td>
                <td>{{$unidad->nombreAsignatura}}</td>
                <td>{{$unidad->examen}}</td>
                <td>{{$unidad->password}}</td>
                
                <td class="text-center">
                    <button class="btn btn-primary editarUnidad" idUnidad="{{$unidad->idunidad}}"><i class="fas fa-edit"></i></button>
                </td>

                <td class="text-center">
                    <button class="btn btn-primary eliminarUnidad" idUnidad="{{$unidad->idunidad}}"><i class="fas fa-trash-alt"></i></button>
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
  <!-- Modal Agregar Unidad -->
  <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Unidad</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="formAgregarUnidad" action="/agregarUnidad" method="POST">
            @csrf
            <div class="modal-body">
                <input type="text" name="nombre" class="form-control mb-4" placeholder="Nombre" required>
                <input type="text" name="examen" class="form-control mb-4" placeholder="URL Examen">
                <input type="text" name="password" class="form-control mb-4" placeholder="Contraseña Examen">

                <select class="form-control" name="asignatura">
                    @foreach ($asignaturas as $asignatura)
                    <option value="{{$asignatura->idasignatura}}">{{$asignatura->nombre}}</option>
                    @endforeach
                </select>

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


  <!-- Modal editar Unidad-->
<div class="modal fade" id="modalEditarUnidad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Editar Unidad</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form id="formEditarUnidad" action="/editarUnidad" method="POST">
      @csrf
      <div id="divEditarUnidad" class="modal-body">
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


