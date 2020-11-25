
<select class="form-control selectUnidadDoc" name="idUnidad">
    <option value="">Seleccione Unidad</option>
    @foreach ($unidades as $unidad)
    <option value="{{$unidad->idunidad}}">{{$unidad->nombre}}</option>
    @endforeach
</select>
<br>
<div id="selectClases"></div>

<script>
     $('.selectUnidadDoc').change(function () {
      
      var idUnidad = $(this).val();

      $.ajax({
          type:'GET',
          url: '/selectClasesAjax',
          data:{idUnidad},
          success: function (data) {
            //    console.log(data);
              $('#selectClases').empty().html(data);
          },
          error: function (error) {
              console.log(error);
          }
      });
  });
</script>