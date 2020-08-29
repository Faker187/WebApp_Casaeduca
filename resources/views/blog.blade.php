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
        <h1 class="h1-responsive text-center text-white">Blog</h1>
        <hr class="my-5"> 
    </div>
</div>
<div class="row">
    <div class="col-md-6 my-3">
        <img class="card-img hoverable" src="{{ asset('img/blog1.jpg') }}" alt="primero blog">
    </div>
    <div class="col-md-6 my-3">
        <img class="card-img hoverable" src="{{ asset('img/blog2.jpg') }}" alt="segundo blog">
    </div>
    <div class="col-md-6 my-3">
        <img class="card-img hoverable" src="{{ asset('img/blog3.jpg') }}" alt="tercer blog">
    </div>
    <div class="col-md-6 my-3">
        <img class="card-img hoverable" src="{{ asset('img/blog4.jpg') }}" alt="cuarto blog">
    </div>
    <div class="col-md-6 my-3">
        <img class="card-img hoverable" src="{{ asset('img/blog5.jpg') }}" alt="cuarto blog">
    </div>
</div>
<!-- ====== /blog ====== -->
</div>
@endsection