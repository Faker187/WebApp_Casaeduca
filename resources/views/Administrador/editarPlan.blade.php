
{{-- <input type="text" name="nombre" class="form-control mb-4" placeholder="Nombre" value="{{$asignatura->nombre}}" required> --}}


<input type="text" name="nombre" value="{{$plan->nombre}}" class="form-control mb-4" placeholder="Nombre Plan" required>
<input type="text" name="cantidadMeses" value="{{$plan->cantidad_meses}}" class="form-control mb-4" placeholder="Cantidad Meses" required>
<input type="text" name="precio" value="{{$plan->precio}}" class="form-control mb-4" placeholder="Precio" required>


<input type="hidden" name="idPlan" value="{{$plan->idplan}}">
<input type="hidden" name="indexTr" value="{{$indexTr}}">