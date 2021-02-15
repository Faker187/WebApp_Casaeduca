@extends('Administrador.admin')

@section('content')
<h1 class="mt-4">Revista</h1>
<br>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTableEsp" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Autor</th>
                <th>Título</th>
                <th>Tema</th>
                <th>Contenido</th>
                <th>Color</th>
                <th>Imagen</th>
                <th>Fecha</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Autor</th>
                <th>Título</th>
                <th>Tema</th>
                <th>Contenido</th>
                <th>Color</th>
                <th>Imagen</th>
                <th>Fecha</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($revistas as $revista)
            <tr>
                <td>{{$revista->autor}}</td>
                <td>{{$revista->titulo}}</td>
                <td>{{$revista->tema}}</td>
                <td>{{$revista->contenido}}</td>
                <td>{{$revista->color}}</td>
                <td>{{$revista->imagen}}</td>
                <td>{{$revista->fecha}}</td>
                <td class="text-center">
                  <button class="btn btn-primary editarRevista" idRevista="{{$revista->id}}"><i class="fas fa-edit"></i></button>
                </td>
                <td class="text-center">
                  <button class="btn btn-primary eliminarRevista" idRevista="{{$revista->id}}"><i class="fas fa-trash-alt"></i></button>
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
  
  <!-- Modal Agregar Revista -->
  <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Anuncio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="formAgregarRevista" action="/agregarRevista" method="POST">
            @csrf
            <div class="modal-body">
                <input type="text" name="autor" class="form-control mb-4" placeholder="Nombre Autor" required>
                <input type="text" name="titulo" class="form-control mb-4" placeholder="Título" required>
                <input type="text" name="tema" class="form-control mb-4" placeholder="Tema" required>
                <textarea class="form-control mb-4" name="contenido" rows="10 " placeholder="Contenido"></textarea>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">Imagen</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" name="imagen" class="custom-file-input" 
                        aria-describedby="inputGroupFileAddon01">
                      <label class="custom-file-label">Buscar</label>
                    </div>
                  </div>
  
                  <label for="color">Seleccione un color:</label>
                  <input type="color" name="color" value="#ff0000">

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Agregar</button>
              </div>
        </form>
      </div>
    </div>
  </div>




<!-- Modal editar Revista-->
<div class="modal fade" id="modalEditarRevista" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Revista</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formEditarRevista" action="/editarRevista" method="POST">
        @csrf
        <div id="divEditarRevista" class="modal-body">
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


