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
<body style="background-color: #673ab7 !important;">


{{-- {{dd($datos)}} --}}
<div class="container" >
    <br>

   


        @if ($respondido == true)
            <div class="jumbotron">
                <center><img style="width:200px;" src="{{ asset('public/img/LOGO.png') }}" alt="LOGO"></center>
                <br>
                <h1 class="display-4">¡Este correo fue respondido!</h1>
                <p class="lead">¡Muchas gracias!</p>
            </div>
        @else

        <div class="jumbotron">
            <center><img style="width:200px;" src="{{ asset('public/img/LOGO.png') }}" alt="LOGO"></center>
            <br>
            <h1 class="display-4">¡Profe tengo una pregunta!</h1>
            <p>Alumno: {{$datos->nombreAlumno}}</p>
            <p>Curso: {{$datos->nombreCurso}}</p>
            <p>Asignatura: {{$datos->nombreAsignatura}}</p>
            <p>Fecha: {{$datos->fecha}}</p>
            {{-- <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p> --}}
            <hr class="my-4">
            <p>Asunto: {{$datos->asunto}}</p>
            <p>Mensaje: {{$datos->mensaje}}</p>
    
            <hr class="my-4">
            <p>Responder</p>
           
            <form id="formResponderCorreo" action="/ResponderCorreo" method="post">
                 @csrf
                <textarea class="form-control" name="respuestaProfesor" id="respuestaProfesor" rows="3" required></textarea>
                <br>
                <button type="submit" class="btn btn-secondary btn-lg" role="button">Enviar</button>
                <input type="hidden" name="asunto" value="{{$datos->asunto}}">
                <input type="hidden" name="token" value="{{$datos->token}}">
                <input type="hidden" name="idalumno" value="{{$datos->idalumno}}">
                <input type="hidden" name="idprofesor" value="{{$datos->idprofesor}}">
                <input type="hidden" name="idasignatura" value="{{$datos->idasignatura}}">
                <input type="hidden" name="correo" value="{{$datos->correo}}">
            </form>
    
          </div>
        @endif

        
      
</div>

  
    <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



{{-- datatable --}}
<script src="http://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
{{-- <script src="{{asset('js/slideCursos.js')}}"></script>  --}}
<!-- HOME -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script src="{{ asset('public/js/funciones.js')}}"></script>



<script>
    $('#formResponderCorreo').submit(function(e){
        e.preventDefault();
       
        let form = $(this);
        let url = form.attr('action');

        var respuesta = $('#respuestaProfesor').val();

        if (respuesta.length > 500) {
            swal("No debe tener mas de 500 caracteres");
        }else{


            swal({
                title: "Estas seguro?",
                text: "Una vez enviada la respuesta no podrás editarla",
                // icon: "warning",
                buttons: true,
                buttons: ["Cancelar", "Si!"],
                dangerMode: true,
                })
                .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                type:'POST',
                url: url,
                data:form.serialize(),
                success: function (data) {
                    console.log(data);
                    location.reload();   
                },
                error: function (error) {
                    console.log(error);
                }
                    });
                }
            });
                }
            });


            
          
</script>


</body>
</html>
