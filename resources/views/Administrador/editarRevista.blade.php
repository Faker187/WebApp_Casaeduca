<input type="text" name="autor" class="form-control mb-4" value="{{$revista->autor}}" placeholder="Nombre Autor" required>
<input type="text" name="titulo" class="form-control mb-4" value="{{$revista->titulo}}" placeholder="Título" required>
<input type="text" name="tema" value="{{$revista->tema}}" class="form-control mb-4" placeholder="Tema" required>
<div class="editor-full">
  <div id="document-full" class="ql-scroll-y" style="height: 300px;">
    <h1>jQueryScript.Net</h1>
  </div>
</div>
<textarea class="form-control mb-4"  id="editarcontenidoR" rows="10" placeholder="Contenido">{{$revista->contenido}}</textarea>
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

  <script type="text/javascript">
   /*  var editor;
    ClassicEditor
      .create( document.querySelector( '#editarcontenidoR' ))
      .then( newEditor => {
          editor = newEditor;
          console.log( newEditor );
      } )
      .catch( error => {
              console.error( error );
    } ); */
    var toolbarOptions = [
    [{
      'header': [1, 2, 3, 4, 5, 6, false]
    }],
    ['bold', 'italic', 'underline', 'strike'], // toggled buttons
    ['blockquote', 'code-block'],

    [{
      'header': 1
    }, {
      'header': 2
    }], // custom button values
    [{
      'list': 'ordered'
    }, {
      'list': 'bullet'
    }],
    [{
      'script': 'sub'
    }, {
      'script': 'super'
    }], // superscript/subscript
    [{
      'indent': '-1'
    }, {
      'indent': '+1'
    }], // outdent/indent
    [{
      'direction': 'rtl'
    }], // text direction

    [{
      'size': ['small', false, 'large', 'huge']
    }], // custom dropdown

    [{
      'color': []
    }, {
      'background': []
    }], // dropdown with defaults from theme
    [{
      'font': []
    }],
    [{
      'align': []
    }],
    ['link', 'image'],

    ['clean'] // remove formatting button
  ];

var quillFull = new Quill('#document-full', {
  modules: {
    toolbar: toolbarOptions,
    autoformat: true
  },
  theme: 'snow',
  placeholder: "Write something..."
});
  </script>