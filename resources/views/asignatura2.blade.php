@extends('layouts.app')

@section('content')
<style>
.block-update-card {
  height: 100%;
  border: 0px;
  width: 380px;
  margin-left: 10px;
  margin-top: 0;
  padding: 0;
  box-shadow: 1px 1px 8px #d8d8d8;
  background-color: #FFFFFF;
}
.block-update-card .h-status {
  width: 100%;
  height: 7px;
  background: repeating-linear-gradient(45deg, #606dbc, #606dbc 10px, #465298 10px, #465298 20px);
}
.block-update-card .v-status {
  width: 5px;
  height: 80px;
  float: left;
  margin-right: 5px;
  background: repeating-linear-gradient(45deg, #606dbc, #606dbc 10px, #465298 10px, #465298 20px);
}
.block-update-card .update-card-MDimentions {
  width: 80px;
  height: 80px;
}
.block-update-card .update-card-body {
  margin-top: 10px;
  margin-left: 5px;
}
.block-update-card .update-card-body h4 {
  color: #737373;
  font-weight: bold;
  font-size: 13px;
}
.block-update-card .update-card-body p {
  color: #737373;
  font-size: 12px;
}
.block-update-card .card-action-pellet {
  padding: 5px;
}
.block-update-card .card-action-pellet div {
  margin-right: 10px;
  font-size: 15px;
  cursor: pointer;
  color: #dddddd;
}
.block-update-card .card-action-pellet div:hover {
  color: #999999;
}
.block-update-card .card-bottom-status {
  color: #a9a9aa;
  font-weight: bold;
  font-size: 14px;
  border-top: #e0e0e0 1px solid;
  padding-top: 5px;
  margin: 0px;
}

</style>
<div class="container-fluid">
  <div class="row justify-content-center" >
    <div class="col-md-4 px-0 ">
        <div class="card border rounded-top" style="box-shadow: none!important">
            <div class="card-body">
                <h5 class="h5-responsive">Contenido del curso</h5>
            </div>
        </div>

        <!-- ACORDION -->
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="heading">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse" aria-expanded="true" aria-controls="collapse">
                        Unidad 1: blablalba
                    </button>
                </h2>
                </div>

                <div id="collapse" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
                        <li>
                            <a class="cargarClase"  href=""></a>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>
        <!-- ACORDION -->
        <div class="accordion" >
            <div class="card">
                <div class="card-header" id="heading">
                <h2 class="mb-0">
                    <button class="btn btn-link btn-block text-left font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse" aria-expanded="true" aria-controls="collapse">
                        Unidad 1: blablalba
                    </button>
                </h2>
                </div>

                <div id="collapse" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                    <ul>
                        <li>
                            <a class="cargarClase"  href=""></a>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-md-8 px-0 elegant-color" id="contenidoClase">

    </div>
    <hr class="slash-1">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card w-100 border-0">
                <div class="card-body">
                    <h3 class="card-title color-ce3 py-4 font-weight-bold animated wow fadeInUp">Lenguaje y Comunicaciones</h3>
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
                </div>
            </div>
            <div class="media block-update-card">
  <a class="pull-left" href="#">
    <img class="media-object update-card-MDimentions" src="http://3.bp.blogspot.com/-IbEOTNtCMyU/TfCAdHaAxEI/AAAAAAAAA8U/EATib38SSAM/s320/joe-mcelderry.jpg" alt="...">
  </a>
  <div class="media-body update-card-body">
    <h4 class="media-heading">Manning Hilton</h4>
    <p>This is the body content of this media.This can be 
      used as an update panel</p>
  </div>
 </div>
        </div>
    </div>
  </div>
</div>


   
@endsection