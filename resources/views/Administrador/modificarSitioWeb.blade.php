@extends('Administrador.admin')

@section('content')
<h1 class="mt-4">Parámetros</h1>

<br>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTableEsp" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Valor</th>
                <th>Editar</th>
                
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Valor</th>
                <th>Editar</th>
                
            </tr>
        </tfoot>
        <tbody>
            @foreach ($parametros as $parametro)
            <tr>
                <td>{{$parametro->parametro}}</td>
                <td>{{$parametro->valor}}</td>
                <td class="text-center">
                  <button class="btn btn-primary editarParametro" idParametro="{{$parametro->id}}"><i class="fas fa-edit"></i></button>
                </td>
               
            </tr>
            @endforeach
          
        </tbody>
    </table>
</div>

<br>

  
<!-- Modal editar Parametro-->
<div class="modal fade" id="modalEditarParametro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Parametro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="formEditarParametro" action="/editarParametro" method="POST">
        @csrf
        <div id="divEditarParametro" class="modal-body"></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Editar</button>
          </div>
    </form>
    </div>
  </div>
</div>



@endsection


