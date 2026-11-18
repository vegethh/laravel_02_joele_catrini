<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articoli</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <h1>Articoli del blog</h1>

    <ul>
        @foreach ($all_articoli as $articolo)
            <li>
                <a href="{{ route('articolo_dettaglio', ['id' => $articolo['id']]) }}">
                    {{ $articolo['titolo'] }}
                </a>
                <p>{{ $articolo['descrizione'] }}</p>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('home') }}">Homepage</a>
</body>
</html>