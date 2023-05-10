<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="background">
        <div class="container">
            <h1>Lista dei film in laravel</h1>
            <h6>(Vai in hover per maggiori informazioni)</h6>
            <div class="card-container">
                @foreach($movies as $movie)
                <div class="card">
                    <h2 class="title">
                        {{$movie['title']}}
                    </h2>
                    <h5 class="subtitle">
                        <span>Titolo originale: </span> <br> {{$movie['original_title']}}
                    </h5>
                    <h5 class="nationality">
                        <span>Nationality: </span> <br> {{$movie['nationality']}}
                    </h5>
                    <div class="info">
                        <h5 class="date">
                            <span>Data di rilascio: </span> <br> {{$movie['date']}}
                        </h5>
                        <h5 class="vote">
                            <span>Voto: </span> <br> {{$movie['vote']}}
                        </h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>