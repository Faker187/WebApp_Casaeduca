
{{-- {{dd($clase, $unidad, $asignatura, $asignaturas)}} --}}
<input type="text" name="nombre" class="form-control mb-4" placeholder="Nombre" value="{{$clase->nombre}}" required>

<select class="form-control selectAsignatura" name="idAsignatura">
    <option value="">Seleccione asignatura</option>
    @foreach ($asignaturas as $asig)
    <option value="{{$asig->idasignatura}}"

        @if ($asig->idasignatura == $asignatura->idasignatura)
            {{"selected"}}
        @endif
    
        >{{$asig->nombre}}</option>
    @endforeach
</select>

<br>

<div id="selectUnidadesEdit">
    <select class="form-control " name="idUnidad">
        <option value="">Seleccione Unidad</option>
        @foreach ($unidades as $uni)
        <option value="{{$uni->idunidad}}"
    
            @if ($uni->idunidad == $unidad->idunidad)
                {{"selected"}}
            @endif
        
            >{{$uni->nombre}}</option>
        @endforeach
    </select>
</div>

<input type="hidden" name="idClase" value="{{$clase->idclase}}">
<input type="hidden" name="indexTr" value="{{$indexTr}}">


<script>
      $('.selectAsignatura').change(function () {
      
      var idAsignatura = $(this).val();
      
      $.ajax({
          type:'GET',
          url: '/selectUnidadesAjax',
          data:{idAsignatura},
          success: function (data) {
              // console.log(data);
              $('#selectUnidadesEdit').empty().html(data);
          },
          error: function (error) {
              console.log(error);
          }
      });
  });
</script>


{{-- <select class="form-control" name="asignatura">
    @foreach ($asignaturas as $asignatura)
    <option value="{{$asignatura->idasignatura}}"

        @if ($clase->idasignatura == $asignatura->idasignatura)
            {{"selected"}}
        @endif
    
        >{{$asignatura->nombre}}</option>
    @endforeach
</select>

<input type="hidden" name="idUnidad" value="{{$clase->idunidad}}">
<input type="hidden" name="indexTr" value="{{$indexTr}}"> --}}