
<select class="form-control selectUnidad" name="idUnidad">
    <option value="">Seleccione Unidad</option>
    @foreach ($unidades as $unidad)
    <option value="{{$unidad->idunidad}}">{{$unidad->nombre}}</option>
    @endforeach
</select>
<br>
