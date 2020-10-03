@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #fff !important;
    }
</style>
<div class="container my-5">
<!-- ====== blog ====== -->
    <div class="container1">
    <div class="card1">
        <div class="card1-header">
        <img src="{{ asset('img/tercerobasico.png') }}" alt="card">
        </div>
        <div class="card1-body">
        <span class="tag1 tag1-teal">
            Tecnología
        </span>
        <h4>Actualización de CasaEduca</h4>
        <p>Nuevas herramientas para las clases interactivas</p>
        <div class="user1">
            <div class="user1-info">
            <h5>Consuelo Díaz</h5>
            <small>2h atrás</small>
            </div>
        </div>
        </div>
    </div>
    <div class="card1">
        <div class="card1-header">
        <img src="{{ asset('img/ninaestudiando.jpg') }}" alt="card">
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
    <div class="card1">
        <div class="card1-header">
        <img src="{{ asset('img/ninaestudiando1.jpg') }}" alt="card">
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
    <div class="card1">
        <div class="card1-header">
        <img src="{{ asset('img/ninaestudiando3.jpg') }}" alt="card">
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
    <div class="card1">
        <div class="card1-header">
        <img src="{{ asset('img/ninoestudiando3.jpg') }}" alt="card">
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
    <div class="card1">
        <div class="card1-header">
        <img src="{{ asset('img/ninoestudiando.jpg') }}" alt="card">
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
</div>
@endsection