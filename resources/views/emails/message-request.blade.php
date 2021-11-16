<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
</head>
<body>
    <div class="col-12">
        <h2>Hai ricevuto un nuovo messaggio, ecco i dettagli:</h2>
        <p>Nome: {{ $lead->name }}</p>
        <p>Email: {{ $lead->email }}</p>
        <p>Messaggio: {{ $lead->message }}</p>
    </div>

</body>
</html>