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
@media only screen and (max-width: 575px) {
  #wrapper {
    margin-left: -9rem;
  }
}

@media only screen and (max-width: 500px) {
  #wrapper {
    margin-left: -4.5rem;
  }
}
</style>

{{-- {{dd($unidades)}} --}}
  <div class="d-flex border-bottom" id="wrapper">


    <div class="bg-light2 border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><h1 class="color-ce0 display-4 my-4 wow fadeInUp">{{$asignatura->nombre}}</h1></div>
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

                    @foreach ($unidad->clases as $clase)
                        <ul>
                        <li>
                            <i class="fas fa-folder-open fa-lg mt-2"></i>
                            <a class="font-weight-bold cargarClase" href="{{$clase->idclase}}" idAlumno={{$idAlumno}}>{{$clase->nombre}}</a>
                        </li>
                        </ul>
                    @endforeach
                </div>
            </div>
            </div>
        @endforeach

      </div> 
    </div>

    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-light bg-ce4 border-bottom">
        <a href="#" id="menu-toggle"><i class="fas fa-arrow-circle-left fa-2x text-white p-2"></i></a>
        <div class="ml-auto">
            <a href="#" class="badge bg-ce0" id="menu-toggle">Volver a mis asignaturas</a>
        </div>
      </nav>

      <div class="text-dark" id="contenidoClase"></div>
    </div>


  </div>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card w-100 border-0">
                <div class="card-body">
                    <h5 class="card-title pl-3 color-ce0 pt-4 pb-2 font-weight-bold animated wow fadeInUp">Acerca de este curso</h5>
                    <p class="card-text  pl-3 text-justify animated wow fadeInUp">
                    </p>                    
                </div>
            </div>
        </div>
        <hr class="slash-1">
        <div class="col-md-10 my-4">
            <div class="card w-100 border-0">
                <div class="card-body">
                    <h5 class="card-title pl-3 color-ce0 pt-4 pb-2 font-weight-bold animated wow fadeInUp">Mi avance</h5>
                    <div class="wow fadeInUp jqmeter-container2" title="Progreso de asignatura"></div>
                    <p class="card-text pl-3 text-center animated wow fadeInUp mb-5">El gráfico muestra solo el avance de la asignatura actual</p>
                </div>
            </div>
        </div>
    </div>
  </div>

@endsection