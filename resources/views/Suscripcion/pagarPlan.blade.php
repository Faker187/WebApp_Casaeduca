@extends('layouts.app')

@section('content')

@php
    

@endphp


<div class="container">
    <h1>Activa tu cuenta</h1>
    <form action="{{$formAction}}" method="POST">
    <input type="hidden" name="token_ws" value={{$tokenWs}}>
    <button type="submit" class="btn primary">Pagar</button>
    </form>
</div>
@endsection