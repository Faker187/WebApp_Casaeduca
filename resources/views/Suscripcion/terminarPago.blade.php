<form id="return-form" action={{$result->urlRedirection}} method="post">
    <input type="hidden" name="token_ws" value={{$tokenWs}}>
</form>

<script>
    document.getElementById('return-form').submit();
</script>