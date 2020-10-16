@extends('layouts.app')


@section('content')
<style>
        /* resets */
    body { margin:0px; padding:0px; }

    /* main */
    header {
        height: 360px;
        z-index: 10;
    }
    .header-banner {
        background-color: #bd9cd8;
        background-image: url('../../img/ninosestudiando.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 100%;
        height: 100%;
    }

    header h1 {
        background-color: #bd9cd8;
        color: #fff;
        padding: 0 1rem;
        position: absolute;
        top: 2rem; 
        left: 2rem;
    }

    .fixed-header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%; 
    }

    nav-1 {
        width: 100%;
        height: 60px;
        background: #673ab7;
        postion: fixed;
        z-index: 10;
    }

    nav-1 div {
        color: white;
        font-size: 2rem;
        line-height: 60px;
        position: absolute;
        top: 0;
        left: 2%;
        visibility: hidden;
    }
    .visible-title {
        visibility: visible;
    }

    nav-1 ul { 
        list-style-type: none;
        margin: 0 2% auto 0;
        padding-left: 0;
        text-align: right;
        max-width: 100%;
    }
    nav-1 ul li { 
        display: inline-block; 
        line-height: 60px;
        margin-left: 10px;
    }
    nav-1 ul li a {
        text-decoration: none; 
        color: #bd9cd8;
    }

    /* demo content */
    body { 
        color: #292f36;
        font-family: helvetica;
        line-height: 1.6;
    }
    .content{ 
        margin: 0 auto;
        padding: 4rem 0;
        width: 960px;
        max-width: 100%;
    }
    article {
        float: left;
        width: 720px;
    }
    article p:first-of-type {
        margin-top: 0;
    }
    aside {
        float: right;
        width: 120px;
    }
    p img {
        max-width: 100%;
    }

    @media only screen and (max-width: 960px) {
        .content{ 
            padding: 2rem 0;
        }
        article {
            float: none;
            margin: 0 auto;
            width: 96%;
        }
        article:last-of-type {  
            margin-bottom: 3rem;
        }
        aside {  
            float: none;
            text-align: center;
            width: 100%;
        }
    }

</style>
<div class="container-fluid px-0 bg-ce2 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-white mx-auto pl-5">
            <div class="text-white text-left py-5 px-4 my-5">
              <div class="cursodatacard">
                <h2 class="card-title h1-responsive pt-3 mb-2 font-bold color-ce4 text-center">
                    <img class="card-img" src="{{ asset('img/noticias.svg') }}" style="width: 70px;margin-bottom: 1rem;" alt="pagina web">
                    <strong>Noticias Casa Educa</strong>
                </h2>
                <p class="mb-2 color-ce4 text-center">Lorem ipsum dolor sit amet consectetur adipiscing elit litora</p>
                <br>
                <br>
                <br>
              </div>
            </div>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="card">
        <div class="card-body">
            <a class="color-ce4">Comparte en<i class="fas fa-share-alt pl-2"></i> :</a>
            <a href="/events" class="facebook pl-5">Facebook<i class="fab fa-facebook-f pl-2"></i></a>
            <a href="/events" class="twitter pl-5">Twitter<i class="fab fa-twitter pl-2"></i></a>
            <a href="/events" class="instagram pl-5">Instagram<i class="fab fa-instagram pl-2"></i></a>
            <a href="/events" class="pinterest pl-5">Pinterest<i class="fab fa-pinterest pl-2"></i></a>
            <img class="card-img" src="{{ asset('img/avion-de-papel.png') }}" style="width: 70px;margin-bottom: 1rem; margin-left: 5rem;" alt="avion papel">
        </div>
    </div>
    <!-- Desarrollo Blog -->
    <section class="content">
        <article>
            <h1 class="mt-5">What is Lorem Ipsum?</h1>
            <p><img src="{{ asset('img/casaeduca1.jpg') }}"></p>
            <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <p><img src="{{ asset('img/casaeduca3.jpg') }}"></p>
            <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </article>
            
    </section> 
  
    <!-- Desarrollo Blog -->
</div>

@endsection