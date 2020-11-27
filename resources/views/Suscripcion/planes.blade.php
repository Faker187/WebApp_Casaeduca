<style>
.bg-light2{
  background-color: #f8f9fa!important;
}
</style>
<br>

<br>
<img width="300" src="{{ asset('public/img/LOGO.png') }}"/>
<br>


{{-- <input type="text" id="nombreEstudiante" class="form-control" placeholder="Ingrese nombre del estudiante"> --}}

<br>
<div class="col-xs-12">
  <h2 class="display-4 text-center mt-5 orange-text">Planes Disponibles</h2>
  <br>
  <!-- Card group -->
  <div class="card-group mb-5">
    @foreach ($planes as $plan)

    <div class="col-md-4">
      <div class="card mb-3" style="max-width: 20rem;">
        <div class="card-body mt-3">
          <h5 class="card-title orange-text font-weight-bold">Plan</h5>
          <hr class="border-light">
          <p class="card-text">
            <ul class="color-ce0 font-weight-bold pt-2 pl-3">
              <li class="color-ce0">Nombre: <span class="orange-text font-weight-bold">{{$plan->nombre}}</span> </li>
              <li class="color-ce0">Cantidad de meses: <span class="orange-text">{{$plan->cantidad_meses}}</span><span class="orange-text font-weight-bold">{{$plan->cantidad_meses > 1 ? 'Meses' : 'Mes'}}</span></li>
              <li class="color-ce0">Precio: <span class="orange-text font-weight-bold">${{$plan->precio}}</span></li>
            </ul>
          </p>
          <br>
          <form action="/procesarPago" method="POST">
              @csrf  
              <input type="hidden" name="idPlan" value="{{$plan->idplan}}">
              <button type="submit" class="ml-5 btn btn-lg bg-ce0 text-white font-weight-bold rounded-lg pagarPlan">Pagar</button>
          </form>
          
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <!-- Card group -->
</div>

  {{-- <script>
      $('.pagarPlan').click(function(e){
    

        var nombre = $('#nombreEstudiante').val();
        
        if (nombre.length == 0) {
            e.preventDefault();
            alert('nombre está vacio');
        }
    });
  </script> --}}