
{{-- {{dd($response)}} --}}
{{-- <div class="container">
    <form id="return-form" action="{{$formAction}}" method="POST">
    <input type="hidden" name="token_ws" value={{$tokenWs}}>
    <button type="submit" class="btn primary"></button>
    </form>
</div> --}}

<div class="container">
    <form id="return-form" action="{{$response->getUrl()}}" method="POST">
    <input type="hidden" name="token_ws" value={{$response->getToken()}}>
    <button type="submit" class="btn primary"></button>
    </form>
</div>

<script>
    document.getElementById('return-form').submit();
</script>