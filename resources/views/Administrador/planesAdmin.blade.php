@extends('Administrador.admin')

@section('content')
<h1 class="mt-4">Planes - {{$nombreCurso}}</h1>
<br>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTableEsp" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cantidad Meses</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Activar/Desactivar</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Cantidad Meses</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Editar</th>
                <th>Activar/Desactivar</th>
            </tr>
        </tfoot>
        <tbody>
            @foreach ($planes as $plan)
            <tr>
                <td>{{$plan->nombre}}</td>
                <td>{{$plan->cantidad_meses}}</td>
                <td>{{$plan->precio}}</td>
                @if ($plan->estado == 1)
                <td>Activo</td>
                @else
                <td>Inactivo</td>
                @endif
                <td class="text-center">
                  <button class="btn btn-primary editarPlan" idPlan="{{$plan->idplan}}"><i class="fas fa-edit"></i></button>
                </td>
                <td class="text-center">
                  <button class="btn btn-primary cambiarEstadoPlan" idPlan="{{$plan->idplan}}"><i class="fas fa-exchange-alt"></i></button>
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
  
  <!-- Modal Agregar Plan -->
  <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Plan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="formAgregarPlan" action="/agregarPlan" method="POST">
            @csrf
            <div class="modal-body">
                <input type="text" name="nombre" class="form-control mb-4" placeholder="Nombre Plan" required>
                <input type="text" name="cantidadMeses" class="form-control mb-4" placeholder="Cantidad Meses" required>
                <input type="text" name="precio" class="form-control mb-4" placeholder="Precio" required>
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




<!-- Modal editar Plan-->
<div class="modal fade" id="modalEditarPlan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Plan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formEditarPlan" action="/editarPlan" method="POST">
        @csrf
        <div id="divEditarPlan" class="modal-body">
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


