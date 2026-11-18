<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <h1>Benvenuto nel Blog Viaggi</h1>
    <p>Scopri itinerari, consigli e storie di viaggio.</p>

    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('chi_siamo') }}">Chi siamo</a></li>
        <li><a href="{{ route('servizi') }}">Servizi</a></li>
        <li><a href="{{ route('articoli') }}">Articoli</a></li>
    </ul>
</body>
</html>