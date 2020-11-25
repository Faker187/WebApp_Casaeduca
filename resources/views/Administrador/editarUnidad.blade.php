<input type="text" name="nombre" class="form-control mb-4" placeholder="Nombre" value="{{$unidad->nombre}}" required>

<input type="text" name="examen" class="form-control mb-4" placeholder="URL examen" value="{{$unidad->examen}}">

<input type="text" name="password" class="form-control mb-4" placeholder="Contraseña Examen" value="{{$unidad->password}}">

<select class="form-control" name="asignatura">
    @foreach ($asignaturas as $asignatura)
    <option value="{{$asignatura->idasignatura}}"

        @if ($unidad->idasignatura == $asignatura->idasignatura)
            {{"selected"}}
        @endif
    
        >{{$asignatura->nombre}}</option>
    @endforeach
</select>

<input type="hidden" name="idUnidad" value="{{$unidad->idunidad}}">
<input type="hidden" name="indexTr" value="{{$indexTr}}">