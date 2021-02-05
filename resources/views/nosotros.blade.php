@extends('layouts.app')

@section('content')
<style>
.manos{
    float: right;
    display: flex;
    position: relative;
    z-index: -1;
    right: 20%;
    opacity: 0.6;
}
.border-right {
    border-color: #bd9cd8 !important;
}
</style>
<div class="container-fluid px-0 bg-ce3 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-white mx-auto pl-5 overflow-hidden">
            <div class="text-white text-left py-5 px-4 my-5">
              <div class="cursodatacard">
                <h2 class="card-title h1-responsive pt-3 mb-2 animated lightSpeedIn slower color-ce0 font-weight-bold text-center">
                    <img class="card-img" src="{{ asset('public/img/REGLA_CORAZON.png') }}" style="width: 70px;margin-bottom: 1rem;" alt="regla corazon">
                    <strong>Casa Educa</strong>
                </h2>
                <p class="mb-2 color-ce4 text-center">{{$quienesSomosSubT}}</p> 
                <br>
                <br>
                <br>
              </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card w-100 border-0">
                <div class="card-body">
                    <h3 class="card-title pr-2 color-ce3 text-center py-2 animated wow fadeInUp">¿Quiénes Somos?</h3>
                    <p class="card-text text-justify animated wow fadeInUp">{!!$quienesSomos!!}</p>                    
                    <br>
                    <p class="card-text text-justify animated wow fadeInUp">{!!$quienesSomosP2!!}</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container mb-5 pb-5 pt-5">
    <div class="row align-self-start">
        <div class="col-md-6 ">
            <div class="card w-100 border-right">
                <div class="card-body">
                    <h3 class="card-title pr-2 color-ce3 text-center py-2 animated wow fadeInUp">Nuestra Misión<img class="card-img"src="{{asset('public/img/002-marker.svg')}}" style="width: 40px;margin-bottom: 1rem; margin-left: 0.5rem;" alt="sombrero"></h3> 
                    <p class="card-text text-justify animated wow fadeInUp"><i>{!!$mision!!}</i></p>                    
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card w-100 border-right">
                <div class="card-body ">
                    <h3 class="card-title pr-2 color-ce3 text-center py-2 animated wow fadeInUp">Nuestra Visión<img class="card-img"src="{{asset('public/img/004-pen.svg')}}" style="width: 40px;margin-bottom: 1rem; margin-left: 0.5rem;" alt="sombrero"></h3>
                    <p class="card-text text-justify animated wow fadeInUp"><i>{!!$vision!!}</i></p>                    
                </div>
            </div>
        </div>

        <div class="col-md-12 my-4">
            <div class="d-flex justify-content-center">
                <img class="img-fluid animated wow fadeInUp" src="{{ asset('public/img/MANO_B.png') }}" style="width: 150px;" alt="">
            </div>
        </div>
    </div>
</div>
@endsection
