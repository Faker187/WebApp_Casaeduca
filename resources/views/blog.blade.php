@extends('layouts.app')

@section('content')
<style>
    body {
        background-color: #fff !important;
    }
</style>
<div class="container">
<!-- ====== blog ====== -->
<div class="row mt-3">
    <div class="col-md-12">
        <div class="sub-header">
            <div class="sub-header-overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h1 class="sub-header-title">Blog Casa Educa</h1>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
    <div class="container">
        <div class="row mt-5">
            <div class="card mb-3">
            <img src="{{ asset('img/ninaestudiando.jpg') }}" class="card-img-top" alt="primero blog">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
            </div>
    </div>
</div>
<!-- ====== /blog ====== -->
</div>
@endsection