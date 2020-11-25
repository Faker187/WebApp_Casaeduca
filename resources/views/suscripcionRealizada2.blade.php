@extends('layouts.bibliotecaLayout')

@section('content')
<br>

<br>

<h2><strong>Planes Disponibles</strong></h2>
<br>
{{-- <input type="text" id="nombreEstudiante" class="form-control" placeholder="Ingrese nombre del estudiante"> --}}

<br>
<!-- Card group -->
  <div class="card-group">

  </div>
  <!-- Card group -->

  {{-- <script>
      $('.pagarPlan').click(function(e){
    

        var nombre = $('#nombreEstudiante').val();
        
        if (nombre.length == 0) {
            e.preventDefault();
            alert('nombre está vacio');
        }
    });
  </script> --}}
@endsection