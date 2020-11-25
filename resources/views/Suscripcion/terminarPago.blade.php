{{-- 
<form id="return-form" action={{$result->urlRedirection}} method="post">
    <input type="hidden" name="token_ws" value={{$tokenWs}}>
</form>

<script>
    document.getElementById('return-form').submit();
</script> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pago Autorizado</title>
</head>
<body>
    {{dd($response)}}
</body>
</html>