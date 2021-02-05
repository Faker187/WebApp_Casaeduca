@extends('layouts.bibliotecaLayout')

@section('content')
<style>
.list-group-item.active{
    color: #4269B0!important;
    background-color: #dbd7ec!important;
    border-color: #dbd7ec!important;
    border
}
.preguntar:hover{
    color: #7c4d99!important;
}
#contenidoClase{
    min-height: 95vh!important;
}
#viewerContainer{
    overflow: hidden!important;
    height: 88.4vh!important;
    min-height: auto!important;
    max-height: auto!important;
}
a:hover,a:focus{
    text-decoration: none;
    outline: none;
}
#accordion .panel{
    border: none;
    border-radius: 5px;
    box-shadow: none;
    margin-bottom: 5px;
}
#accordion .panel-heading{
    padding: 0;
    border: none;
    border-radius: 5px 5px 0 0;
}
#accordion .panel-title a{
    display: block;
    padding: 20px 30px;
    background: #fff;
    font-size: 17px;
    font-weight: bold;
    color: #bd9cd8;
    letter-spacing: 1px;
    text-transform: uppercase;
    border: 1px solid #bd9cd8;
    border-radius: 5px 5px 0 0;
    position: relative;
}
#accordion .panel-title a.collapsed{
    border-color: #e0e0e0;
    border-radius: 5px;
}
#accordion .panel-title a:before,
#accordion .panel-title a.collapsed:before,
#accordion .panel-title a:after,
#accordion .panel-title a.collapsed:after{
    content: "\f103";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border-radius: 5px;
    background: #bd9cd8;
    font-size: 20px;
    color: #fff;
    text-align: center;
    position: absolute;
    top: 15px;
    right: 30px;
    opacity: 1;
    transform: scale(1);
    transition: all 0.3s ease 0s;
}
#accordion .panel-title a:after,
#accordion .panel-title a.collapsed:after{
    content: "\f101";
    background: transparent;
    color: #bd9cd8;
    opacity: 0;
    transform: scale(0);
}
#accordion .panel-title a.collapsed:before{
    opacity: 0;
    transform: scale(0);
}
#accordion .panel-title a.collapsed:after{
    opacity: 1;
    transform: scale(1);
}
#accordion .panel-body{
    padding: 20px 30px;
    background: #dbd7ec;
    border-top: none;
    font-size: 15px;
    color: #fff;
    line-height: 28px;
    letter-spacing: 1px;
    border-radius: 0 0 5px 5px;
}
#menu-toggle:hover{
    background-color: #bd9cd8;
}

.bg-light2{
    background-color: #f8f9fa!important;
}
#sidebar-wrapper .sidebar-heading{
    max-width: 335px!important;
}
#viewerContainer {
  height: 43.4vh!important;
}
#mainPdfWarrper {
  height: 50vh!important;
}
</style>

{{-- {{dd($unidades)}} --}}
  <div class="d-flex border-bottom" id="wrapper">


    <div class="bg-light2 border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">
        <h2 class="color-ce0 h2-responsive my-4 wow fadeInUp">{{$asignatura->nombre}}</h2>
    </div>
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        @foreach ($unidades as $unidad)
            <div class="panel panel-default mb-0">
            <div class="panel-heading" role="tab" id="heading{{$unidad->idunidad}}">
                <h4 class="panel-title mb-0">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_{{$unidad->idunidad}}" aria-expanded="true" class="collapsed" aria-controls="collapse_{{$unidad->idunidad}}">
                        {{$unidad->nombre}}
                    </a>
                </h4>
            </div>
            <div id="collapse_{{$unidad->idunidad}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading{{$unidad->idunidad}}">
                <div class="panel-body">

                    <ul>
                        @foreach ($unidad->clases as $clase)
                          <li>
                            <i class="fas fa-folder-open fa-lg mt-2"></i>
                            <a class="font-weight-bold cargarClase" href="{{$clase->idclase}}" idAlumno={{$idAlumno}}>{{$clase->nombre}}</a>
                          </li>
                        @endforeach
                        @if(isset($unidad->examen))
                        <li>
                            <i class="fas fa-file-alt fa-lg mt-2 color-ce0"></i>
                            <a class="font-weight-bold" href="{{$unidad->examen}}" target="_blank">Tomar Examen</a>
                            <span class="p-2 color-ce4">Contraseña: <b class="font-weight-bold">{{$unidad->password}}</b></span>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>
            </div>
        @endforeach

      </div> 
    </div>

    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-ce4 border-bottom">
        <a href="#" id="menu-toggle"><i class="fas fa-arrow-circle-left fa-2x text-white p-2"></i></a>
      </nav>
    
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card w-100 border-0">
                    <div class="card-body">
                        <h5 class="card-title pl-3 color-ce0 pt-4 font-weight-bold animated wow fadeInUp">Acerca de este curso</h5>
                        <p class="lead pl-3 text-justify py-2 color-ce3 animated wow fadeInUp">
                            {!!$asignatura->descripcion!!}
                        </p>  
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" id="contenidoClase"></div>
      </div>
      
    </div>


  </div>

<!-- Central Modal Small -->
<div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Documento</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-dark h-100">
        <div id="resolte-contaniner" class="px-1"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-ce0 text-white btn-sm" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Central Modal Small -->

@endsection