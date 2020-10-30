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
    <div class="card mb-4 m-1">
            <div class="view overlay">
                {{-- <img class="card-img-top" src="{{ asset('img/lenguaje.png') }}"
                    alt="Card image cap">
                <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                </a> --}}
            </div>
            <div class="card-body danger-color">
                <div class="d-flex">
                
                </div>
                <div class="d-flex mb-3">
                    <div class="mr-auto p-2">
                        <a class="btnce-1 text-white font-weight-bold" href="#">Cantidad de meses</a>
                    </div>
                    <div class="p-2"><a class="btnce-1 text-white font-weight-bold" href="#">{{$plan->cantidad_meses}} {{$plan->cantidad_meses > 1 ? 'Meses' : 'Mes'}}</a></div>
                </div>

                <div class="d-flex mb-3">
                <div class="mr-auto p-2">
                    <a class="btnce-1 text-white font-weight-bold" href="#">Precio:</a>
                </div>
                <div class="p-2"><a class="btnce-1 text-white font-weight-bold" href="#">${{$plan->precio}}</a></div>
            </div>

                <br>
                    <form action="/procesarPago" method="POST">
                        @csrf  
                        <input type="hidden" name="idPlan" value="{{$plan->idplan}}">
                        <button type="submit" class="btn btn-block btn-primary pagarPlan">Pagar</button>
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