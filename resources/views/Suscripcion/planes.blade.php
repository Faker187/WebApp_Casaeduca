<br>

<br>

<h2><strong>Planes Disponibles</strong></h2>
<br>
{{-- <input type="text" id="nombreEstudiante" class="form-control" placeholder="Ingrese nombre del estudiante"> --}}

<br>
<!-- Card group -->
<div class="card-group">

  @foreach ($planes as $plan)

  <div class="col-md-4">
    <div class="card bg-ce1 mb-3" style="max-width: 20rem;">
      <div class="card-body mt-3">
        <h5 class="card-title color-ce4 font-weight-bold">Plan</h5>
        <hr class="border-light">
        <p class="card-text">
          <ul class="color-ce4 font-weight-bold pt-2 pl-3">
            <li>Cantidad de meses: {{$plan->cantidad_meses}} {{$plan->cantidad_meses > 1 ? 'Meses' : 'Mes'}}</li>
            <li>Precio: ${{$plan->precio}} </li>
          </ul>
        </p>
        <br>
        <form action="/procesarPago" method="POST">
            @csrf  
            <input type="hidden" name="idPlan" value="{{$plan->idplan}}">
            <button type="submit" class="ml-5 btn rounded-pill btn-lg font-weight-bold border-0 bg-ce0 pagarPlan">Pagar</button>
        </form>
        
      </div>
    </div>
  </div>


  @endforeach
  
  
  
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