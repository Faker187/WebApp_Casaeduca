<input type="text" name="autor" class="form-control mb-4" value="{{$revista->autor}}" placeholder="Nombre Autor" required>
<input type="text" name="titulo" class="form-control mb-4" value="{{$revista->titulo}}" placeholder="Título" required>
<input type="text" name="tema" value="{{$revista->tema}}" class="form-control mb-4" placeholder="Tema" required>
<div class="card border-1">
  <div class="card-body mx-auto p-1">
    <a href="#" id="textA-right" class="btn btn-light"><i class="fas fa-align-right"></i></a>
    <a href="#" id="textA-left" class="btn btn-light"><i class="fas fa-align-left"></i></a>
    <a href="#" id="textA-justify" class="btn btn-light"><i class="fas fa-align-justify"></i></a>
    <a href="#" id="textA-center" class="btn btn-light"><i class="fas fa-align-center"></i></a>
  </div>
</div>
<textarea class="form-control mb-4" name="contenido" id="editarcontenidoR" rows="10" placeholder="Contenido">{{$revista->contenido}}</textarea>
<div class="input-group my-3">
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

<script>
  function align(align) {
    const range = editor.createRange();
    range.selectNodeContents(editor.editable());
    // Create selection and set range.
    const sel = editor.getSelection();
    sel.selectRanges([range]);
    editor.execCommand('justify' + align);
    // Remove selection.
    sel.removeAllRanges();
  }
  var editor;
  ClassicEditor
      .create( document.querySelector( '#editarcontenidoR' ))
      .then( newEditor => {
          editor = newEditor;
          console.log( newEditor );
      } )
      .catch( error => {
              console.error( error );
      } );

      $('#textA-left').click(() => {
        align('left');
      });

      $('#textA-right').click(() => {
        align('right');
      });

      $('#textA-justify').click(() => {
        align('justify');
      });

      $('#textA-center').click(() => {
        align('center');
      });
</script>