{{-- <input type="text" name="nombre" class="form-control mb-4" placeholder="Nombre" value="{{$profesor->name}}" required> --}}
@switch($parametro->parametro)
    @case('Invitación Plan Académico')
        <textarea class="form-control" id="valor" name="editor" cols="80" rows="10">{{$parametro->valor}}</textarea>
        @break
    @case('Nuestra Misión - Página Nosotros')
        <textarea class="form-control" id="valor" name="editor" cols="80" rows="10">{{$parametro->valor}}</textarea>
        @break
    @case('Nuestra Visión - página Nosotros')
        <textarea class="form-control" id="valor" name="editor" cols="80" rows="10">{{$parametro->valor}}</textarea>
        @break
    @case('Parrafo 2 - Página Nosotros')
        <textarea class="form-control" id="valor" name="editor" cols="80" rows="10">{{$parametro->valor}}</textarea>
        @break
    @case('Plan académico - Descripción')
        <textarea class="form-control" id="valor" name="editor" cols="80" rows="10">{{$parametro->valor}}</textarea>
        @break
    @case('Plan académico - Nuestro proyecto educativo')
        <textarea class="form-control" id="valor" name="editor" cols="80" rows="10">{{$parametro->valor}}</textarea>
        @break
    @case('Plan académico - Soporte Educacional')
        <textarea class="form-control" id="valor" name="editor" cols="80" rows="10">{{$parametro->valor}}</textarea>
        @break
    @case('Plan académico - Supcripción Mensual')
        <textarea class="form-control" id="valor" name="editor" cols="80" rows="10">{{$parametro->valor}}</textarea>
        @break
    @case('Quienes Somos - Página Nosotros')
        <textarea class="form-control" id="valor" name="editor" cols="80" rows="10">{{$parametro->valor}}</textarea>
        @break
    @case('Sobre Nosotros - Pie de página')
        <textarea class="form-control" id="valor" name="editor" cols="80" rows="10">{{$parametro->valor}}</textarea>
        @break
    @default
        <textarea class="form-control" id="valor" name="valor" rows="3">{{$parametro->valor}}</textarea>
@endswitch



<input type="hidden" name="idParametro" value="{{$parametro->id}}">
<input type="hidden" name="indexTr" value="{{$indexTr}}">
<script> 
    CKEDITOR.replace('editor');
</script>