

<h2>Nuevo mensaje</h2>
<p>Nombre Alumno: {{$nombreAlumno}}</p>
<p>Curso: {{$nombreCurso}}</p>
<p>Asignatura: {{$nombreAsignatura}}</p>
<p>Mensaje: {{$mensaje}}</p>
<br>
<p><strong>Para respoder el correo haga click en el siguiente Link</strong></p>
<a href={{"https://casaeduca.cl/responderCorreo/".$idCorreo."/".$token}}>Responder Correo</a>
