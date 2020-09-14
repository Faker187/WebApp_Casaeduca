@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #f9e085 !important;
    }
</style>
<div class="container">
<!-- ====== blog ====== -->
<div class="row mt-5">
    <div class="col-md-12">
        <h1 class="h1-responsive text-center text-white">
        <img class="card-img" src="{{ asset('public/img/CAMARA.png') }}" style="width: 70px;margin-bottom: 1rem;" alt="camara">
        Blog
        </h1>
    </div>
</div>
<div class="row">
    <div class="col-md-6 my-3">
        <img class="img-fluid" src="{{ asset('public/img/FOTO1.png') }}" alt="primero blog">
    </div>
    <div class="col-md-6 my-3">
        <img class="img-fluid" src="{{ asset('public/img/FOTO2.png') }}" alt="segundo blog">
    </div>
    <div class="col-md-6 my-3">
        <img class="img-fluid" src="{{ asset('public/img/FOTO3.png') }}" alt="tercer blog">
    </div>
    <div class="col-md-6 my-3">
        <img class="img-fluid" src="{{ asset('public/img/FOTO4.png') }}" alt="cuarto blog">
    </div>
    <div class="col-md-6 my-3">
        <img class="img-fluid" src="{{ asset('public/img/FOTO5.png') }}" alt="cuarto blog">
    </div>
</div>
<!-- ====== /blog ====== -->
</div>
@endsection