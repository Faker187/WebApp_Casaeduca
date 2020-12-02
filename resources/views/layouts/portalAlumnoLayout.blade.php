{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
<!--  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
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
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="{{ asset('public/css/estilos.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/hover.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/fondo.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/banner.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/blog.css') }}" rel="stylesheet">

    {{-- datatable --}}
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">


    
    <title>Casa educa</title>
</head>
<body>

    @php
        // dd(Session::getId());
    @endphp

 <div id="app">

    <!-- MAIN CONTENT -->
    <main class="">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <div class="footer-wrapper">
        <div class="footer-bottom">
            <div class="container">
                <div class="row footer-menu">
                    <div class="col-lg-5 col-md-5 col-sm-6 footer-1">
                        <aside id="text-1" class="widget widget_text">
                            <div class="footer-static-title"><h4><span>Sobre nosotros</span><span class="mobile-button visible-xs active"></span></h4></div>
                            <div class="textwidget">
                                <p class="mg4">
                                CasaEduca fue creado con el objetivo de permitir un desarrollo de esta actividad de educación a través de soluciones integrales a quienes la practican, otorgando un verdadero soporte personalizado para alumnos y apoderados.
                                </p>
                                <ul class="social-media">
                                    <li><a class="facebook" href="#">Facebook</a></li>
                                    <li><a class="twitter" href="#">Twitter</a></li>
                                    <li><a class="instagram" href="#">Instagram</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
					<div class="col-lg-2 col-md-2 col-sm-6 footer-2">
                        <aside id="nav_menu-1" class="widget widget_nav_menu">
                            <div class="footer-static-title"><h4><span>Casa educa</span><span class="mobile-button visible-xs active"></span></h4></div>
                            <div class="menu-my-account-container">
                                <ul id="menu-my-account" class="menu">
                                    <li id="menu-item-4971" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4971"><a href="{{ url('/Casaeduca') }}">Nosotros</a></li>
                                    <li id="menu-item-4972" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4972"><a href="{{ url('/Blog') }}">Revista</a></li>
                                </ul>
                            </div>
                        </aside>						
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-6 footer-3">
                        <aside id="nav_menu-2" class="widget widget_nav_menu">
                            <div class="footer-static-title"><h4><span>Mis servicios</span><span class="mobile-button visible-xs active"></span></h4></div>
                            <div class="menu-my-services-container">
                                <ul id="menu-my-services" class="menu">
                                    <li id="menu-item-4977" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4977"><a href="{{ url('/suscribete') }}">Suscríbete</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 footer-4">
                        <aside id="text-2" class="widget widget_text"><div class="footer-static-title"><h4><span>Contáctanos</span><span class="mobile-button visible-xs active"></span></h4></div>
                            <div class="textwidget">
                                <div class="about-des">
                                    <div class="address">
                                        <p><i class="icon-location-pin icons color"></i> Dirección: Casa educa, Santiago</p>
                                        <p><i class="icon-phone icons color"></i> Telefono: +569 123 456 78</p>
                                        <p><i class="icon-envelope icons color"></i> E-mail: contacto@casaeduca.com</p>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
				</div>
			</div>
			
			<!-- Footer -->
			<div class="footer">
				<div class="container">
                    <div class="copyright-block">
						<div class="copyright">
                            Copyright 2020 <a href="#">Casaeduca</a>. Desarrollado por Aliados SPA.
                        </div>
					</div>
                </div>
			</div>
		</div>
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
{{-- <script src="{{asset('js/slideCursos.js')}}"></script>  --}}
<!-- HOME -->

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<script src="{{ asset('public/js/funciones.js')}}"></script>

<script src="{{ asset('public/js/jqmeter.min.js') }}"></script>


<script>
    $(document).ready(function(){
        new WOW().init();
        
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

        if ($(window).width() > 992) {
            $(window).scroll(function(){  
                if ($(this).scrollTop() > 40) {
                    $('#navbar_top').addClass("fixed-top");
                    $('#navbar_top').css('background-color: transparent!important');
                    // add padding top to show content behind navbar
                    $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
                }else{
                    $('#navbar_top').removeClass("fixed-top");
                    $('#navbar_top').removeClass("bg-white");
                    $('#navbar_top').css('background-color: #fff!important');
                    // remove padding top from body
                    $('body').css('padding-top', '0');
                }   
            });
        }

        $(document).on('click', '.dropdown-menu', function (e) {
            e.stopPropagation();
        });
        
        // clickable on mobile view
        if ($(window).width() < 992) {
            $('.has-submenu a').click(function(e){
                e.preventDefault();
                $(this).next('.megasubmenu').toggle();

                $('.dropdown').on('hide.bs.dropdown', function () {
                    $(this).find('.megasubmenu').hide();
                })
            });
        }
        $('#recipeCarousel').carousel({
            interval: 10000
        })

        $('#recipeCarousel.carousel .carousel-item').each(function(){
            var minPerSlide = 3;
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
            
            for (var i=0;i<minPerSlide;i++) {
                next=next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                
                next.children(':first-child').clone().appendTo($(this));
            }
        });
        
            // vista blog
        $(window).scroll(function(){
            if ($(window).scrollTop() >= 300) {
                $('nav').addClass('fixed-header');
                $('nav div').addClass('visible-title');
            }else {
                $('nav').removeClass('fixed-header');
                $('nav div').removeClass('visible-title');
            }
        });

        $('.jqmeter-container').jQMeter({
            goal:'$1,000',
            raised:'$200',
            meterOrientation:'horizontal',
            width:'100%',
            height:'50px',
            barColor: '#4269B0'
        });
        
        $('.jqmeter-container2').jQMeter({
            goal:'$1,000',
            raised:'$200',
            meterOrientation:'horizontal',
            width:'100%',
            height:'40px',
            barColor: '#5cb85c'
        });
        

    });

</script>




</body>
</html>
