<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio en contrucción</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <style>
        .imgfluid{
            width: 101%!important;
            height: 101vh!important;
        }
        #mobile{
            display:none;
            width: 101%!important;
            height: 101vh!important;
        }
        @media (max-width: 600px){
            #mobile{
                display:block!important;
                width: 101%!important;
                height: 101vh!important;
            }
            .imgfluid{
                display:none;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid m-0 p-0">
        <div class="row m-0 p-0">
            <div class="col-md-12 m-0 p-0">
                <img src="{{ URL::asset('public/img/POPUPSITIOENCONSTRUCCION.png') }} " class="imgfluid m-0 p-0" alt="sitio en contruccion">
                <img src="{{ URL::asset('public/img/POPUPCASAEDUCA.png') }} " id="mobile" class="m-0 p-0" alt="sitio en contruccion">
            </div>
        </div>
    </div>
</body>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

</html>