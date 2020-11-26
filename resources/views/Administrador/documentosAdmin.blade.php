@extends('Administrador.admin')

@section('content')

@php
    $url = url()->current();
    $idCurso = explode('/',$url);
    $idCurso = intval(end($idCurso));
@endphp

<h1 class="mt-4">Documentos - {{$nombreCurso}}</h1>
<br>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTableEsp" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Documento</th>
                <th>Video</th>
                <th>Asignatura</th>
                <th>Unidad</th>
                <th>Clase</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Documento</th>
                <th>Video</th>
                <th>Asignatura</th>
                <th>Unidad</th>
                <th>Clase</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($documentos as $documento)
            <tr>
                <td>{{$documento->nombre}}</td>
                <td>{{$documento->documento}}</td>
                <td>{{$documento->link}}</td>
                <td>{{$documento->nombreAsignatura}}</td>
                <td>{{$documento->nombreUnidad}}</td>
                <td>{{$documento->nombreClase}}</td>
                <td class="text-center">
                    <button class="btn btn-primary editarDocumento" idDocumento="{{$documento->id}}" idCurso="{{$idCurso}}" ><i class="fas fa-edit"></i></button>
                </td>
                <td class="text-center">
                    <button class="btn btn-primary eliminarDocumento" idDocumento="{{$documento->id}}" idCurso="{{$idCurso}}" ><i class="fas fa-trash-alt"></i></button>
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


<!-- Modal Agregar Documento -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Agregar Documento</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form id="formAgregarDocumento" action="/agregarDocumento" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            <input type="text" name="nombre" class="form-control mb-4" placeholder="Nombre" required>
            <input type="text" name="link" class="form-control mb-4" placeholder="Link de video">

            <div class="custom-file">
                <input type="file" class="custom-file-input" name="documento">
                <label class="custom-file-label" for="inputGroupFile01">Seleccionar Archivo</label>
              </div>
            <br><br>

            <select class="form-control selectAsignaturaDoc" name="idAsignatura">
                <option value="">Seleccione asignatura</option>
                @foreach ($asignaturas as $asignatura)
                <option value="{{$asignatura->idasignatura}}">{{$asignatura->nombre}}</option>
                @endforeach
            </select>

            <br>
            <div id="selectUnidadesDoc">

                <div id="selectClasesDoc"></div>

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



 <!-- Modal editar Documento-->
 <div class="modal fade" id="modalEditarDocumento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
 aria-hidden="true">
 <div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <h5 class="modal-title" id="exampleModalLabel">Editar Documento</h5>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>
     <form id="formEditarDocumento" action="/editarDocumento" method="POST">
       @csrf
       <div id="divEditarDocumento" class="modal-body">
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


