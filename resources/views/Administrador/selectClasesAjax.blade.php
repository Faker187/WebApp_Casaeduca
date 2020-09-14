
<select class="form-control " name="idClase">
    <option value="">Seleccione Clase</option>
    @foreach ($clases as $clase)
    <option value="{{$clase->idclase}}">{{$clase->nombre}}</option>
    @endforeach
</select>