<input type="text" name="autor" class="form-control mb-4" value="{{$revista->autor}}" placeholder="Nombre Autor" required>
<input type="text" name="titulo" class="form-control mb-4" value="{{$revista->titulo}}" placeholder="Título" required>
<input type="text" name="tema" value="{{$revista->tema}}" class="form-control mb-4" placeholder="Tema" required>
<textarea class="form-control mb-4" name="contenido" rows="3" placeholder="Contenido">{{$revista->contenido}}</textarea>
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
  <input type="color" name="color" value="{{$revista->color}}">
  <input type="hidden" name="idRevista" value="{{$revista->id}}">
  <input type="hidden" name="fecha" value="{{$revista->fecha}}">