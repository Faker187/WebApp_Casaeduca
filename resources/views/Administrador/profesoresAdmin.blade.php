@extends('Administrador.admin')

@section('content')
<h1 class="mt-4">Profesores</h1>
<br>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTableEsp" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($profesores as $profesor)
            <tr>
                <td>{{$profesor->name}}</td>
                <td>{{$profesor->email}}</td>
                <td class="text-center">
                  <button class="btn btn-primary editarProfesor" idProfesor="{{$profesor->id}}"><i class="fas fa-edit"></i></button>
                </td>
                <td class="text-center">
                  <button class="btn btn-primary eliminarProfesor" idProfesor="{{$profesor->id}}"><i class="fas fa-trash-alt"></i></button>
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
  
  <!-- Modal Agregar Profesor -->
  <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Profesor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="formAgregarProfesor" action="/agregarProfesor" method="POST">
            @csrf
            <div class="modal-body">
                <input type="text" name="nombre" class="form-control mb-4" placeholder="Nombre" required>
                <input type="email" name="email" class="form-control mb-4" placeholder="Correo Electrónico" required>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Agregar</button>
              </div>
        </form>
      </div>
    </div>
  </div>




<!-- Modal editar profesor-->
<div class="modal fade" id="modalEditarProfesor" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Profesor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formEditarProfesor" action="/editarProfesor" method="POST">
        @csrf
        <div id="divEditarProfesor" class="modal-body">
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


