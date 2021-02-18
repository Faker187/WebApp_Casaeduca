
 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Panel Administrador - Casa Educa</title>
        <link href="{{ asset('public/dist/css/styles.css') }}" rel="stylesheet" />
        <link href="{{ asset('public/css/summernote-bs4.css') }}" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="/Administrador">Panel de Administrador</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    {{-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div> --}}
                </div>  
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
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
            </ul>
        </nav>
        <div id="layoutSidenav">    
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Dashboard</div>
                            <a class="nav-link " href="/Administrador">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Sitio Web</div>
                            <a class="nav-link " href="/ModificarSitioWeb">
                                <div class="sb-nav-link-icon"><i class="fas fa-desktop"></i></div>
                                Modificar Sitio Web
                            </a>
                            <div class="sb-sidenav-menu-heading">Usuarios</div>
                            <a class="nav-link " href="/Alumnos">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Alumnos
                            </a>
                            <a class="nav-link" href="/Profesores">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-reader"></i></div>
                                Profesores
                            </a>
                            <div class="sb-sidenav-menu-heading">SISTEMA</div>
                         
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePrimero" aria-expanded="false" aria-controls="collapsePrimero">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Primero Básico
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePrimero" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/adminAsignaturas/1"> <i class="fas fa-book mr-2"></i>Asignaturas</a>
                                    <a class="nav-link" href="/adminUnidades/1"><i class="fas fa-swatchbook mr-2"></i>Unidades</a>
                                    <a class="nav-link" href="/adminClases/1"> <i class="fas fa-book-open mr-2"></i> Clases</a>
                                    <a class="nav-link" href="/adminDocumentos/1"> <i class="fas fa-book-open mr-2"></i> Documentos</a>
                                    <a class="nav-link" href="/planes/1"> <i class="fas fa-user-clock mr-2"></i> Planes</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSegundo" aria-expanded="false" aria-controls="collapseSegundo">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Segundo Básico
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseSegundo" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/adminAsignaturas/2"><i class="fas fa-book mr-2"></i>Asignaturas</a>
                                    <a class="nav-link" href="/adminUnidades/2"><i class="fas fa-swatchbook mr-2"></i>Unidades</a>
                                    <a class="nav-link" href="/adminClases/2"> <i class="fas fa-book-open mr-2"></i> Clases</a>
                                    <a class="nav-link" href="/adminDocumentos/2"> <i class="fas fa-book-open mr-2"></i> Documentos</a>
                                    <a class="nav-link" href="/planes/2"> <i class="fas fa-user-clock mr-2"></i> Planes</a>
                                </nav>
                            </div>
                          
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTercero" aria-expanded="false" aria-controls="collapseTercero">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Tercero Básico
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseTercero" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/adminAsignaturas/3"><i class="fas fa-book mr-2"></i>Asignaturas</a>
                                    <a class="nav-link" href="/adminUnidades/3"><i class="fas fa-swatchbook mr-2"></i>Unidades</a>
                                    <a class="nav-link" href="/adminClases/3"> <i class="fas fa-book-open mr-2"></i> Clases</a>
                                    <a class="nav-link" href="/adminDocumentos/3"> <i class="fas fa-book-open mr-2"></i> Documentos</a>
                                    <a class="nav-link" href="/planes/3"> <i class="fas fa-user-clock mr-2"></i> Planes</a>
                                </nav>
                            </div>
                          
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCuarto" aria-expanded="false" aria-controls="collapseCuarto">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Cuarto Básico
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseCuarto" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/adminAsignaturas/4"><i class="fas fa-book mr-2"></i>Asignaturas</a>
                                    <a class="nav-link" href="/adminUnidades/4"><i class="fas fa-swatchbook mr-2"></i>Unidades</a>
                                    <a class="nav-link" href="/adminClases/4"> <i class="fas fa-book-open mr-2"></i> Clases</a>
                                    <a class="nav-link" href="/adminDocumentos/4"> <i class="fas fa-book-open mr-2"></i> Documentos</a>
                                    <a class="nav-link" href="/planes/4"> <i class="fas fa-user-clock mr-2"></i> Planes</a>
                                </nav>
                            </div>
                          
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseQuinto" aria-expanded="false" aria-controls="collapseQuinto">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Quinto Básico
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseQuinto" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/adminAsignaturas/5"><i class="fas fa-book mr-2"></i>Asignaturas</a>
                                    <a class="nav-link" href="/adminUnidades/5"><i class="fas fa-swatchbook mr-2"></i>Unidades</a>
                                    <a class="nav-link" href="/adminClases/5"> <i class="fas fa-book-open mr-2"></i> Clases</a>
                                    <a class="nav-link" href="/adminDocumentos/5"> <i class="fas fa-book-open mr-2"></i> Documentos</a>
                                    <a class="nav-link" href="/planes/5"> <i class="fas fa-user-clock mr-2"></i> Planes</a>
                                </nav>
                            </div>
                          
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSexto" aria-expanded="false" aria-controls="collapseSexto">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Sexto Básico
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseSexto" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="/adminAsignaturas/6"><i class="fas fa-book mr-2"></i>Asignaturas</a>
                                    <a class="nav-link" href="/adminUnidades/6"><i class="fas fa-swatchbook mr-2"></i>Unidades</a>
                                    <a class="nav-link" href="/adminClases/6"> <i class="fas fa-book-open mr-2"></i> Clases</a>
                                    <a class="nav-link" href="/adminDocumentos/6"> <i class="fas fa-book-open mr-2"></i> Documentos</a>
                                    <a class="nav-link" href="/planes/6"> <i class="fas fa-user-clock mr-2"></i> Planes</a>
                                </nav>
                            </div>
                          
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeptimo" aria-expanded="false" aria-controls="collapseSeptimo">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Séptimo Básico
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseSeptimo" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                  <a class="nav-link" href="/adminAsignaturas/7"><i class="fas fa-book mr-2"></i>Asignaturas</a>
                                  <a class="nav-link" href="/adminUnidades/7"><i class="fas fa-swatchbook mr-2"></i>Unidades</a>
                                  <a class="nav-link" href="/adminClases/7"> <i class="fas fa-book-open mr-2"></i> Clases</a>
                                  <a class="nav-link" href="/adminDocumentos/7"> <i class="fas fa-book-open mr-2"></i> Documentos</a>
                                  <a class="nav-link" href="/planes/7"> <i class="fas fa-user-clock mr-2"></i> Planes</a>
                                </nav>
                            </div>
                          
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOctavo" aria-expanded="false" aria-controls="collapseOctavo">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Octavo Básico
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseOctavo" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                  <a class="nav-link" href="/adminAsignaturas/8"><i class="fas fa-book mr-2"></i>Asignaturas</a>
                                    <a class="nav-link" href="/adminUnidades/8"><i class="fas fa-swatchbook mr-2"></i>Unidades</a>
                                    <a class="nav-link" href="/adminClases/8"> <i class="fas fa-book-open mr-2"></i> Clases</a>
                                    <a class="nav-link" href="/adminDocumentos/8"> <i class="fas fa-book-open mr-2"></i> Documentos</a>
                                    <a class="nav-link" href="/planes/8"> <i class="fas fa-user-clock mr-2"></i> Planes</a>
                                    
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">Correos</div>
                            <a class="nav-link" href="/adminCorreos">
                                <div class="sb-nav-link-icon"><i class="fas fa-question"></i></div>
                                Preguntas
                            </a>


                            <div class="sb-sidenav-menu-heading">Anuncios</div>
                            <a class="nav-link" href="/adminRevista">
                                <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                                Revista
                            </a>

                          
                            <div class="sb-sidenav-menu-heading">Pagos</div>
                            <a class="nav-link" href="/Pagos">
                                <div class="sb-nav-link-icon"><i class="fas fa-money-bill-wave"></i></div>
                                Pagos
                            </a>
                            {{-- <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a> --}}
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Sesión iniciada como:</div>
                        Administrador
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                     <div class="container-fluid">
                      @yield('content')
            
                    </div> 
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Casa Educa 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="{{ asset('public/dist/js/scripts.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('public/dist/js/chart-area-demo.js') }}"></script>
        <script src="{{ asset('public/dist/js/chart-bar-demo.js') }}"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('public/dist/js/datatables-demo.js') }}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="{{asset('public/js/funciones.js')}}"></script> 
        <script src="{{asset('public/js/summernote-bs4.js')}}"></script>
        <script src="{{asset('public/js/summernote-es-ES.js')}}"></script>
        <script>
        $(document).ready(function() {
            $("textarea[name='contenido']").summernote({
                lang: 'es-ES'
            });
            $("textarea[name='descripcion']").summernote({
                lang: 'es-ES'
            });
        });
        </script>
    </body>
</html>



 
