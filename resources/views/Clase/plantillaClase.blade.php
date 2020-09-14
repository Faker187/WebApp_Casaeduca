{{-- {{dd($clase, $documentos)}} --}}

<div class="container">
    <br>
    <h2>{{$clase->nombre}}</h2>

    <hr>

    <h4>Contenido Multimedia</h4>

    @foreach ($documentos as $documento)
    
    <div>
        <p>{{$documento->nombre}}</p>
        <a href="#">{{$documento->documento}}</a>
    </div>
    @endforeach
    
</div>