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
</style>
<div class="container-fluid">
  <div class="row justify-content-center" >
    <div class="col-md-4 px-0 border-bottom">
        <div class="card border rounded-top" style="box-shadow: none!important">
            <div class="card-body">
                <div class="row justify-content-start">
                    <div class="col-md-12">
                        <h1 class="color-ce00 display-4 my-4 wow fadeInUp">Lenguaje y Comunicaciones</h1>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            @foreach ($unidades as $unidad)
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title mb-0">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_{{$unidad->idunidad}}" aria-expanded="true" aria-controls="collapse_{{$unidad->idunidad}}">
                            {{$unidad->nombre}}
                        </a>
                    </h4>
                </div>
                <div id="collapse_{{$unidad->idunidad}}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">

                        @foreach ($unidad->clases as $clase)
                            @php
                            $ext = explode('.', $clase->tipo_documento);
                            $extension = '';
                            var_dump($clase->tipo_documento);
                            if(isset($ext[1])){
                                $extension = $ext[1];
                            }
                            @endphp
                            @switch($extension)
                                @case('txt')
                                    <li class="p-2 ml-3">
                                        <i class="fas fa-file fa-2x pr-2 secondary-color"></i>
                                        <a class="font-weight-bold cargarClase" href="{{$clase->idclase}}">{{$clase->nombre}}</a>
                                    </li>
                                    @break

                                @case('docx')
                                    <li class="p-2 ml-3">
                                        <i class="fas fa-file-word fa-2x pr-2 primary-color"></i>
                                        <a class="font-weight-bold cargarClase" href="{{$clase->idclase}}">{{$clase->nombre}}</a>
                                    </li>
                                    @break

                                @case('pptx')
                                    <li class="p-2 ml-3">
                                        <i class="fas fa-file-powerpoint fa-2x pr-2 orange"></i>
                                        <a class="font-weight-bold cargarClase" href="{{$clase->idclase}}">{{$clase->nombre}}</a>
                                    </li>
                                    @break

                                @case('xlsx')
                                    <li class="p-2 ml-3">
                                        <i class="fas fa-file-excel fa-2x pr-2 success-color"></i>
                                        <a class="font-weight-bold cargarClase" href="{{$clase->idclase}}">{{$clase->nombre}}</a>
                                    </li>
                                    @break

                                @case('pdf')
                                    <li class="p-2 ml-3">
                                        <i class="fas fa-file-pdf fa-2x pr-2 danger-color"></i>
                                        <a class="font-weight-bold cargarClase" href="{{$clase->idclase}}">{{$clase->nombre}}</a>
                                    </li>
                                    @break

                                @case('png')
                                    <li class="p-2 ml-3">
                                        <i class="fas fa-file-image fa-2x pr-2 info-color"></i>
                                        <a class="font-weight-bold cargarClase" href="{{$clase->idclase}}">{{$clase->nombre}}</a>
                                    </li>
                                    @break

                                @case('jpg')
                                    <li class="p-2 ml-3">
                                        <i class="fas fa-file-image fa-2x pr-2 info-color"></i>
                                        <a class="font-weight-bold cargarClase" href="{{$clase->idclase}}">{{$clase->nombre}}</a>
                                    </li>
                                    @break

                                @default
                                    <li class="p-2 ml-3">
                                        <i class="fas fa-file fa-2x pr-2 color-ce4 "></i>
                                        <a class="font-weight-bold cargarClase" href="{{$clase->idclase}}">{{$clase->nombre}}</a>
                                    </li>
                            @endswitch 
                        @endforeach
                    </div>
                </div>
              </div>
            @endforeach

        </div> 
    </div>

    <!-- IFRAME -->
    <div class="col-md-8 ml-auto elegant-color" id="contenidoClase"></div>

    <br>
    <div class="row justify-content-center mt-5">
        <div class="col-md-10">
            <div class="card w-100 border-0">
                <div class="card-body">
                    <h5 class="card-title pl-3 color-ce0 pt-4 pb-2 font-weight-bold animated wow fadeInUp">Acerca de este curso</h5>
                    <p class="card-text  pl-3 text-justify animated wow fadeInUp">Identificar los sonidos que componen las palabras, reconociendo,
                    separando y combinando sus fonemas y sílabas. Leer palabras aisladas y en
                    contexto, aplicando su conocimiento de la correspondencia letra-sonido en
                    diferentes combinaciones. Demostrar compresión de narraciones que
                    aborden temas que les sean familiares.</p>                    
                    <p class="card-text pl-3 text-justify animated wow fadeInUp">Leer independientemente y
                    comprender textos no literarios escritos con oraciones simples, para
                    entretenerse y ampliar su conocimiento del mundo. Escribir oraciones
                    complejas para transmitir mensajes. Escribir con letra clara, separando las
                    palabras con un espacio para que puedan ser leídas por otros con facilidad.</p>
                </div>
            </div>
        </div>
        <div class="col-md-12 my-4">
            <div class="d-flex justify-content-center">
                <img class="img-fluid animated wow fadeInUp" src="{{ asset('img/MANO_B.png') }}" style="width: 150px;" alt="">
            </div>
        </div>
        <hr class="slash-1">
        <div class="col-md-10 my-4">
            <div class="card w-100 border-0">
                <div class="card-body">
                    <h5 class="card-title pl-3 color-ce0 pt-4 pb-2 font-weight-bold animated wow fadeInUp">Docente a cargo</h5>

                    <div class="list-group-flush">
                      <div class="list-group-item">
                        <p class="mb-0 color-ce1"><i class="far fa-image fa-2x mr-4 bg-ce2 p-3 white-text rounded-circle" aria-hidden="true"></i>Nombre del profe</p>
                      </div>
                      <div class="list-group-item">
                        <p class="mb-0 color-ce1"> <i class="fas fa-briefcase fa-2x mr-4 mr-4 bg-ce0 white-text p-3 rounded-circle" aria-hidden="true"></i>Algún otro dato</p>
                      </div>
                      <div class="list-group-item">
                        <p class="mb-0"><i class="far fa-paper-plane fa-2x mr-4 mr-4 bg-ce5 p-3 rounded-circle" aria-hidden="true"></i><a class="color-ce0 preguntar" href="#">Hacer pregunta</a></p>
                      </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-12 my-4">
            <div class="d-flex justify-content-center">
                <img class="img-fluid animated wow fadeInUp" src="{{ asset('img/MANO_A.png') }}" style="width: 150px;" alt="">
            </div>
        </div>
        <hr class="slash-1">
        <div class="col-md-10 my-4">
            <div class="card w-100 border-0">
                <div class="card-body">
                    <h5 class="card-title pl-3 color-ce0 pt-4 pb-2 font-weight-bold animated wow fadeInUp">Mi avance</h5>
                    <div class="wow fadeInUp jqmeter-container2" title="Progreso de asignatura"></div>
                    <p class="card-text pl-3 text-center animated wow fadeInUp mb-5">El gráfico muestra solo el avance de la asignatura: </p>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>


   
@endsection