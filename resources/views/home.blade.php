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
    <div>
        <div class="container">
            <h1>Lista dei film in laravel</h1>
            <div class="card-container">
                @foreach($movies as $movie)
                <div class="card">
                    <h2 class="title">
                        {{$movie['title']}}
                    </h2>
                    <h4 class="subtitle">
                        {{$movie['original_title']}}
                    </h4>
                    <span class="nationality">{{$movie['nationality']}}</span>
                    <span class="date">{{$movie['date']}}</span>
                    <span class="vote">{{$movie['vote']}}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>