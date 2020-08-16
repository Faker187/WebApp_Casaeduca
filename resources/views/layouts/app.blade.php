{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">|
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm py-3">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hover.css') }}" rel="stylesheet">
    {{-- datatable --}}
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">

    <title>Casa educa</title>
</head>
<body>
 <div id="app">
    <!-- PRIMER NAVBAR -->
    <nav class="navbar navbar-expand-md bg-ce1 navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img style="width:300px;" src="{{ asset('img/casaeducalogo1.png') }}" alt="LOGO">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="btn bg-ce4 text-white nav-link rounded" href="{{ route('login') }}"><i class="fas fa-sign-in-alt pr-2"></i> Ingresar</a>
                        </li>
                        {{-- @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="btn bg-ce4 text-white nav-link rounded" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif --}}

                        <li class="nav-item">
                            <a class="btn bg-ce4 text-white nav-link rounded" href="/suscribete">Suscríbete</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- SEGUNDO NAVBAR -->
    <nav class="navbar navbar-expand-md bg-ce2 navbar-light bg-white shadow-sm">
        <div class="collapse navbar-collapse navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
            <li class="nav-item px-2">
                <a class="nav-link text-white font-5" href="#">
                    <img style="width:26px;" src="{{ asset('img/casaeducaEscudo.png') }}" alt="">
                    ¿Quiénes somos?
                </a>
            </li>
            <li class="nav-item px-2 border-left border-light">
                <a class="nav-link font-5 text-white" style="padding-top: 0.6rem;" href="#">Cursos</a>
            </li>
            <li class="nav-item px-2 border-left border-light">
                <a class="nav-link font-5 text-white" style="padding-top: 0.6rem;" href="#">Plan Académico</a>
            </li>
            <li class="nav-item px-2 border-left border-light">
                <a class="nav-link font-5 text-white" style="padding-top: 0.6rem;" href="#">Contacto</a>
            </li>
            </ul>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="page-footer font-small blue mt-4">
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">

                <!-- Content -->
                <h5 class="text-uppercase">¿Necesitas mas información?</h5>
                <p>- Teléfono: +562 2419 8792<br>-Whatsapp: +569 4098 7519</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none pb-3">

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Casa educa</h5>

                <ul class="list-unstyled">
                <li>
                    <a href="#!">¿Quienes somos?</a>
                </li>
                <li>
                    <a href="#!">Ponte en contacto con nosotros.</a>
                </li>
                </ul>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">

                <!-- Links -->
                <h5 class="text-uppercase">Redes sociales</h5>

                <ul class="list-unstyled">
                <li>
                    <a href="#!">Facebook</a>
                </li>
                <li>
                    <a href="#!">Whatsapp</a>
                </li>
                <li>
                    <a href="#!">Instagram</a>
                </li>
                <li>
                    <a href="#!">Twitter</a>
                </li>
                </ul>

            </div>
            <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center bg-ce4 py-3">© 2020 Copyright:
            <a href="https://casaeduca.cl/"> Casaeduca.cl</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- FOOTER -->
 </div>

  
    <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

{{-- datatable --}}
<script src="http://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
{{-- <script src="{{asset('/js/slideCursos.js')}}"></script>  --}}
<!-- HOME -->
{{-- <script src="{{asset("public/js/funciones.js")}}"></script>  --}}

<script>
    $('.cargarClase').click(function(e){
    e.preventDefault();
    let idClase = $(this).attr('href');
    // alert(idClase);
    $.ajax({
        url: '/CargarClase/'+idClase,
        type:'GET',
        // data:{idClase},
        success: function(data){
            console.log(data);
            // let contenido = json_decode
            $('#contenidoClase').empty().html(data);
        },
        error: function (error) {
            console.log(error);
        }

    })
});



$(".list-group-item").click(function() {
    // $(this).parent().addClass('active').siblings().removeClass('active');
    $(this).addClass('active').siblings().removeClass('active');
});


$(document).ready( function () {
    $('#myTable').DataTable();
} );

</script>




</body>
</html>
