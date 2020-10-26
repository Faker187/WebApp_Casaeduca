
<input type="text" name="nombre" class="form-control mb-4" placeholder="Nombre" value="{{$asignatura->nombre}}" required>

<select class="custom-select" name="idprofesor">
    <option value="0" selected>No Asignado</option>
    @foreach ($profesores as $profesor)
        @if ($profesor->id == $asignatura->idprofesor)
            <option selected value="{{$profesor->id}}">{{$profesor->name}}</option>
        @else
            <option value="{{$profesor->id}}">{{$profesor->name}}</option>
        @endif

    
    @endforeach
  </select>

<input type="hidden" name="idAsignatura" value="{{$asignatura->idasignatura}}">
<input type="hidden" name="indexTr" value="{{$indexTr}}">