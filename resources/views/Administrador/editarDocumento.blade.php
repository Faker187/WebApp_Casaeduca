{{-- {{dd($documento, $asignaturas, $unidades, $clases)}} --}}

<input type="text" name="nombre" value="{{$documento->nombre}}" class="form-control mb-4" placeholder="Nombre" required>
<input type="text" name="link" value="{{$documento->link}}" class="form-control mb-4" placeholder="Link de video">

<div class="custom-file">
    <input type="file" class="custom-file-input" name="documento">
    <label class="custom-file-label" for="inputGroupFile01">Seleccionar Archivo</label>
  </div>
<br><br>

<select class="form-control selectAsignaturaDoc" name="idAsignatura">
    <option value="">Seleccione asignatura</option>
    @foreach ($asignaturas as $asig)
    <option value="{{$asig->idasignatura}}"

        @if ($asig->idasignatura == $documento->idAsignatura)
            {{"selected"}}
        @endif
    
        >{{$asig->nombre}}</option>
    @endforeach
</select>

<br>
<div class="selectUnidadesDoc">

    <select class="form-control selectUnidadDoc" name="idUnidad">
        <option value="">Seleccione unidad</option>
        @foreach ($unidades as $unidad)
        <option value="{{$unidad->idunidad}}"
    
            @if ($unidad->idunidad == $documento->idUnidad)
                {{"selected"}}
            @endif
        
            >{{$unidad->nombre}}</option>
        @endforeach
    </select>

    <br>
    <div id="selectClasesDoc">
        <select class="form-control selectClaseDoc" name="idClase">
            <option value="">Seleccione Clase</option>
            @foreach ($clases as $clase)
            <option value="{{$clase->idclase}}"
        
                @if ($clase->idclase == $documento->idClase)
                    {{"selected"}}
                @endif
            
                >{{$clase->nombre}}</option>
            @endforeach
        </select>
    </div>

</div>

<input type="hidden" name="idCurso" value="{{$idCurso}}">
<input type="hidden" name="idDocumento" value="{{$documento->id}}">


<script>
    $('.selectAsignaturaDoc').change(function () {
      
      var idAsignatura = $(this).val();
      
      $.ajax({
          type:'GET',
          url: '/selectUnidadesDocAjax',
          data:{idAsignatura},
          success: function (data) {
            //   console.log(data);
        
              $('.selectUnidadesDoc').empty().html(data);
          },
          error: function (error) {
              console.log(error);
          }
      });
  });
</script>