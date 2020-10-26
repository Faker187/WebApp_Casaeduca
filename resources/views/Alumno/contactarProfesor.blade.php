@php
date_default_timezone_set("America/Santiago");
$fecha = date("Y-m-d G:i:s");

@endphp

<p>Profesor: {{$profesor->name}}</p>
<p>Asignatura: {{$asignatura->nombre}}</p>
<p>Cantidad Intentos: {{$cantidadIntentos}}</p>


<form id="formCorreoProfesor" action="/EnviarCorreo" method="POST">

   @csrf
   <input type="hidden" name="idalumno" value="{{Auth::user()->name}}">
   <input type="hidden" name="nombreAlumno" value="{{$nombreAlumno}}">
   <input type="hidden" name="nombreCurso" value="{{$nombreCurso}}">
   <input type="hidden" name="nombreAsignatura" value="{{$asignatura->nombre}}">
   <input type="hidden" name="idprofesor" value="{{$profesor->id}}">
   <input type="hidden" name="idasignatura" value="{{$asignatura->idasignatura}}">
   <input type="hidden" name="correo" value="{{$profesor->email}}">
   <input type="hidden" name="fecha" value="{{$fecha}}">
   <input type="text" name="asunto" class="form-control mb-4" placeholder="Asunto" required>
   <div class="form-group">
      <textarea class="form-control rounded-0" name="mensaje" rows="3" placeholder="Mensaje" required></textarea>
   </div>


   <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>

</form>


 <!-- Message -->
 
<script>
$('#formCorreoProfesor').submit(function(e){
   e.preventDefault();
   
   let form = $(this);
   let url = form.attr('action');

   $.ajax({
      type:'POST',
      url: url,
      data:form.serialize(),
      success: function (data) {
         console.log(data);
      },
      error: function (error) {
            console.log(error);
        }
   });

});

</script>