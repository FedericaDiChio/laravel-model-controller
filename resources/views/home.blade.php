<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Document</title>
</head>
<body>
    <h1>Movies</h1>
    <div> 
        @foreach ($movies as $movie) 
            <h2>Titolo: {{ $movie->title }}</h2>
            <address>Titolo originale: {{ $movie->original_title }}</address>
            <p>Paese: {{ $movie->nationality}}</p>
            <time>Data: {{ $movie->date }}</time>
            <p>Voto: {{ $movie->vote }}</p>
        @endforeach
    </div>        
</div>
</body>
</html>