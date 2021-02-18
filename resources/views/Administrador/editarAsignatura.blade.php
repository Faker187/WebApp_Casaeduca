
<input type="text" name="nombre" class="form-control mb-4" placeholder="Nombre" value="{{$asignatura->nombre}}" required>

<select class="custom-select mb-3" name="idprofesor">
    <option value="0" selected>No Asignado</option>
    @foreach ($profesores as $profesor)
        @if ($profesor->id == $asignatura->idprofesor)
            <option selected value="{{$profesor->id}}">{{$profesor->name}}</option>
        @else
            <option value="{{$profesor->id}}">{{$profesor->name}}</option>
        @endif

    
    @endforeach
  </select>

  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroupFileAddon01">Imagen</span>
    </div>
    <div class="custom-file">
      <input type="file" name="imagen" class="custom-file-input" 
        aria-describedby="inputGroupFileAddon01">
      <label class="custom-file-label">Buscar</label>
    </div>
  </div>

  <label for="color">Seleccione un color:</label>
  <input type="color" name="color" value="{{$asignatura->color}}">
  <!-- <input type="text" name="examen" class="form-control mb-4" placeholder="Link Examen"> -->
  <textarea class="form-control" name="descripcion" id="descripcionAsig" rows="10" placeholder="Descripción asignatura">{{$asignatura->descripcion}}</textarea>


<input type="hidden" name="idAsignatura" value="{{$asignatura->idasignatura}}">
<input type="hidden" name="indexTr" value="{{$indexTr}}">

<script>
  $(document).ready(function() {
    $("#descripcionAsig").summernote({
        lang: 'es-ES'
    });
  });
</script>