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

    <link href="{{ asset('public/officetohtml/layout/styles/layout.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/officetohtml/include/jquery_ui/themes/start/jquery-ui.min.css') }}"> 
    <!-- ################################ For files reder ###############################-->
    <!--PDF-->
    <link rel="stylesheet" href="{{ asset('public/officetohtml/include/pdf/pdf.viewer.css') }}">
    <!--Docs-->
    <!--PPTX-->
    <link rel="stylesheet" href="{{ asset('public/officetohtml/include/PPTXjs/css/pptxjs.css') }}">
    <link rel="stylesheet" href="{{ asset('public/officetohtml/include/PPTXjs/css/nv.d3.min.css') }}">
    <!--All Spreadsheet -->
    <link rel="stylesheet" href="{{ asset('public/officetohtml/include/SheetJS/handsontable.full.min.css') }}">
    <!--Image viewer-->
    <link rel="stylesheet" href="{{ asset('public/officetohtml/include/verySimpleImageViewer/css/jquery.verySimpleImageViewer.css') }}">
    <!--officeToHtml-->
    <link rel="stylesheet" href="{{ asset('public/officetohtml/officeToHtml.css') }}">
    <link href="{{ asset('public/css/simple_sidenav.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/estilos.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/hover.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/fondo.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/banner.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/blog.css') }}" rel="stylesheet">


    
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

<script src="{{ asset('public/officetohtml/include/jquery_ui/jquery-ui.min.js') }}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<script type="text/javascript" src="{{ asset('public/officetohtml/include/pdf/pdf.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/officetohtml/include/docx/jszip-utils.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/officetohtml/include/docx/mammoth.browser.min.js') }}"></script>


<script type="text/javascript" src="{{ asset('public/officetohtml/include/PPTXjs/js/jszip.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/officetohtml/include/PPTXjs/js/filereader.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/officetohtml/include/PPTXjs/js/d3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/officetohtml/include/PPTXjs/js/nv.d3.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/officetohtml/include/PPTXjs/js/pptxjs.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/officetohtml/include/PPTXjs/js/divs2slides.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/officetohtml/include/SheetJS/handsontable.full.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/officetohtml/include/SheetJS/shim.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/officetohtml/include/SheetJS/xlsx.full.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/officetohtml/include/verySimpleImageViewer/js/jquery.verySimpleImageViewer.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/officetohtml/officeToHtml.js') }}"></script>

<!-- HOME -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- BIBLIOTECA JS -->

<script src="{{ asset('public/js/funciones.js')}}"></script>

<script src="{{ asset('public/js/jqmeter.min.js') }}"></script>


<script>
    $(document).ready(function(){
        $(document).bind("contextmenu",function(e){
            return false;
        });
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
            

           /*  if ($(window).width() <= 575) {  
                if($('#wrapper').hasClass('toggled')){
                    $('#wrapper').css('margin-left','0rem');
                }else{
                    $('#wrapper').css('margin-left','-0rem');
                }
            }else if($(window).width() <= 500){
                if($('#wrapper').hasClass('toggled')){
                    $('#wrapper').css('margin-left','0rem');
                }else{
                    $('#wrapper').css('margin-left','-6rem');
                }
            } */

     
        });

        /* if ($(window).width() <= 575) {  
            $('#wrapper').css('margin-left','0rem');
        } */
        new WOW().init();
        
        $('.cargarClase').click(function(e){
            e.preventDefault();
            let idClase = $(this).attr('href');
            let idAlumno = $(this).attr('idAlumno');


            $.ajax({
                url: '/RegistrarClaseSesion',
                type:'GET',
                data:{idAlumno, idClase},
                success: function(data){
                    console.log(data);
                    // let contenido = json_decode
           
                },
                error: function (error) {
                    console.log(error);
                }

            });
      

            $.ajax({
                url: '/CargarClase/'+idClase,
                type:'GET',
                // data:{idClase},
                success: function(data){
                    // console.log(data);
                    // let contenido = json_decode
                    $('#contenidoClase').empty().html(data);
                },
                error: function (error) {
                    console.log(error);
                }

            });
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
        $('.jqmeter-container2').jQMeter({
            goal:'$1,000',
            raised:'$200',
            meterOrientation:'horizontal',
            displayTotal: true,
            width:'75%',
            height:'40px',
            barColor: '#5cb85c'
        });

        $('.collapse.in').prev('.panel-heading').addClass('active');
        $('#accordion, #bs-collapse').on('show.bs.collapse', function(a) {
            $(a.target).prev('.panel-heading').addClass('active');
        }).on('hide.bs.collapse', function(a) {
            $(a.target).prev('.panel-heading').removeClass('active');
        });
        $('#menu-toggle').click(function(){
            if($(this).children().hasClass('fa-arrow-circle-left')){
                $(this).children().removeClass('fa-arrow-circle-left');
                $(this).children().addClass('fa-arrow-circle-right');
            }else{
                $(this).children().addClass('fa-arrow-circle-left');
                $(this).children().removeClass('fa-arrow-circle-right');
            }
        });
        $('#centralModalSm').on('hidden.bs.modal', function() {
            $('#resolte-contaniner').empty();
        });
    });

</script>




</body>
</html>
