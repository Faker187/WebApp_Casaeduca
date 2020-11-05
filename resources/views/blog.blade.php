@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #fff !important;
    }
</style>
<div class="container-fluid px-0 bg-ce0 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-white mx-auto pl-5 overflow-hidden">
            <div class="text-white text-left py-5 px-4 my-5">
              <div class="cursodatacard">
                <h2 class="card-title h1-responsive pt-3 mb-2 animated lightSpeedIn slower color-ce2 font-weight-bold text-center">
                    <img class="card-img" src="{{ asset('public/img/blog.svg') }}" style="width: 70px;margin-bottom: 1rem;" alt="regla corazon">
                    <strong>Revista</strong>
                </h2>
                <p class="mb-2 animated lightSpeedIn slower delay-3s color-ce2 text-center">Lorem ipsum dolor sit amet consectetur adipiscing elit litora</p>
                <br>
                <br>
                <br>
              </div>
            </div>
        </div>
    </div>
</div>
<div class="container my-5 ">
    {{-- {{dd($revistas)}} --}}

    <div class="container1 mb-5">
        
       @foreach ($revistas as $revista)

       <div class="card1 animated wow fadeInUp">
        <div class="card1-header">
        <img src="{{ asset('public/storage/'.$revista->imagen) }}" alt="card">
        </div>
        <div class="card1-body">
        <span class="tag1 tag1-teal" style="background-color: {{$revista->color}}">
            {{$revista->tema}}
        </span>
        <h4>{{$revista->titulo}}</h4>
        <div class="user1">
            <div class="user1-info">
                <div>{{$revista->autor}}</div>
                <small>{{$revista->fecha}}</small>
            </div>
        </div>
        {{-- <p>Nuevas herramientas para las clases interactivas</p> --}}
        <br>
        {{-- <a class="color-ce0" href="{{ url('/Noticias') }}">Ver</a> --}}
        <a href="/DetalleRevista/{{$revista->id}}" class="btn btn-block" style="background-color: {{$revista->color}}; color: white;">Ver más</a>

        <br>
       
        </div>
    </div>

       @endforeach
        
    </div>
<!-- ====== blog ====== -->
    <div class="container1 mb-5">
        <div class="card1 animated wow fadeInUp">
            <div class="card1-header">
            <img src="{{ asset('public/img/tercerobasico.png') }}" alt="card">
            </div>
            <div class="card1-body">
            <span class="tag1 tag1-teal">
                Tecnología
            </span>
            <h4>Actualización de CasaEduca</h4>
            <p>Nuevas herramientas para las clases interactivas</p>
            <br>
            <a class="color-ce0" href="{{ url('/Noticias') }}">Ver</a>
            <br>
            <div class="user1">
                <div class="user1-info">
                <h5>Consuelo Díaz</h5>
                <small>2h atrás</small>
                </div>
            </div>
            </div>
        </div>
        <div class="card1 animated wow fadeInUp">
            <div class="card1-header">
            <img src="{{ asset('public/img/ninaestudiando.jpg') }}" alt="card">
            </div>
            <div class="card1-body">
            <span class="tag1 tag1-purple">
                Metodologías
            </span>
            <h4>Se aborda una nueva técnica de metodología de estudios</h4>
            <p>En la actualidad, las técnicas de estudio han mejorado...</p>
            <div class="user1">
                <div class="user1-info">
                <h5>Jeremy Ramos</h5>
                <small>1 día atrás</small>
                </div>
            </div>
            </div>
        </div>
        <div class="card1 animated wow fadeInUp">
            <div class="card1-header">
            <img src="{{ asset('public/img/ninaestudiando1.jpg') }}" alt="card">
            </div>
            <div class="card1-body">
            <span class="tag1 tag1-pink">
                Noticias
            </span>
            <h4>Ministerio quiere iniciar clases</h4>
            <p>En santiago, el ministro de educación busca implementar las clases....</p>
            <div class="user1">
                <div class="user1-info">
                <h5>Leila Perez</h5>
                <small>31 Sep 2020</small>
                </div>
            </div>
            </div>
        </div>
        <div class="card1 animated wow fadeInUp">
            <div class="card1-header">
            <img src="{{ asset('public/img/ninaestudiando3.jpg') }}" alt="card">
            </div>
            <div class="card1-body">
            <span class="tag1 tag1-teal">
                Metodologías
            </span>
            <h4>Aprendizaje matemático</h4>
            <p>¿Cómo abordar los problemas y resolverlos?</p>
            <div class="user1">
                <div class="user1-info">
                <h5>Karina Lopez</h5>
                <small>5h atrás</small>
                </div>
            </div>
            </div>
        </div>
        <div class="card1 animated wow fadeInUp">
            <div class="card1-header">
            <img src="{{ asset('public/img/ninoestudiando3.jpg') }}" alt="card">
            </div>
            <div class="card1-body">
            <span class="tag1 tag1-purple">
                Noticias
            </span>
            <h4>¿Aprendizaje feliz?</h4>
            <p>Como abordar el aprendizaje de manera interactiva para incentivar a los niños</p>
            <div class="user1">
                <div class="user1-info">
                <h5>Javiera Contreras</h5>
                <small>Hoy</small>
                </div>
            </div>
            </div>
        </div>
        <div class="card1 animated wow fadeInUp">
            <div class="card1-header">
            <img src="{{ asset('public/img/ninoestudiando.jpg') }}" alt="card">
            </div>
            <div class="card1-body">
            <span class="tag1 tag1-pink">
                Tecnología
            </span>
            <h4>Dispositivos Smarth</h4>
            <p>¿Influyen de manera positiva al aprendizaje?</p>
            <div class="user1">
                <div class="user1-info">
                <h5>Carlos Collio</h5>
                <small>27 Sep 2020</small>
                </div>
            </div>
            </div>
        </div>
    </div>
<!-- ====== /blog ====== -->
    <div class="row">
    <div class="col-md-12 my-4">
            <div class="d-flex justify-content-center">
                <img class="img-fluid animated wow fadeInUp" src="{{ asset('public/img/MANO_B.png') }}" style="width: 150px;" alt="">
            </div>
        </div>
    </div>
</div>
@endsection