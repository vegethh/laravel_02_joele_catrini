<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $articolo['titolo'] }}</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <h1>{{ $articolo['titolo'] }}</h1>
    <p><strong>{{ $articolo['descrizione'] }}</strong></p>
    <p>{{ $articolo['contenuto'] }}</p>

    <a href="{{ route('articoli') }}">Torna agli articoli</a>
    <br>
    <a href="{{ route('home') }}">Homepage</a>
</body>
</html>