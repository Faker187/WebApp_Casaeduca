@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card border-0 mx-5 my-5 p-5 color-ce0 text-center">
        <div class="card-body">
          <h1 class="display-1 h5 orange-text"><img width="200" src="{{ asset('public/img/verif.png') }}"/> Bienvenido</h1>
          <h2 class="display-3 h2 my-4 py-2">Suscripción realizada correctamente</h2>
          <p class="lead mb-4 pb-2 px-md-5 mx-md-5">Inicia sesión haciendo click, <a class="badge bg-ce1" href="/login"><i class="fas fa-clone left"></i> Aquí</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection