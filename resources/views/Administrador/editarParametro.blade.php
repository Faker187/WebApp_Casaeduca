{{-- <input type="text" name="nombre" class="form-control mb-4" placeholder="Nombre" value="{{$profesor->name}}" required> --}}


<textarea class="form-control" name="valor" rows="3">{{$parametro->valor}}</textarea>

<input type="hidden" name="idParametro" value="{{$parametro->id}}">
<input type="hidden" name="indexTr" value="{{$indexTr}}">