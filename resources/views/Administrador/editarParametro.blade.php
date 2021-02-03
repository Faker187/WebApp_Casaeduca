{{-- <input type="text" name="nombre" class="form-control mb-4" placeholder="Nombre" value="{{$profesor->name}}" required> --}}

@if($parametro->parametro == 'Nuestra Misión - Página Nosotros')
<textarea class="form-control" id="valor" name="editor" rows="3">{{$parametro->valor}}</textarea>
@elseif($parametro->parametro == 'Nuestra Visión - página Nosotros')
<textarea class="form-control" id="valor" name="editor" rows="3">{{$parametro->valor}}</textarea>
@elseif($parametro->parametro == 'Parrafo 2 - Página Nosotros')
<textarea class="form-control" id="valor" name="valor" rows="3">{{$parametro->valor}}</textarea>
@else
<input type="hidden" name="idParametro" value="{{$parametro->id}}">
@endif
<input type="hidden" name="indexTr" value="{{$indexTr}}">