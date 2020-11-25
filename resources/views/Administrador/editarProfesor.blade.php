<input type="text" name="nombre" class="form-control mb-4" placeholder="Nombre" value="{{$profesor->name}}" required>
<input type="email" name="email" class="form-control mb-4" placeholder="Correo Electrónico" value="{{$profesor->email}}" required>
<input type="hidden" name="idProfesor" value="{{$profesor->id}}">
<input type="hidden" name="indexTr" value="{{$indexTr}}">