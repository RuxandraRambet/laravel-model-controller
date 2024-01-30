<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <h1 class="text-center my-5">Movies</h1>
        <div class="d-flex flex-wrap gap-3">
            @foreach ($movies as $movie)
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie['title'] }}</h5>
                        <p class="card-text">Original Title: {{ $movie['original_title'] }}</p>
                        <p class="card-text">Nationality : {{ $movie['nationality'] }}</p>
                        <p class="card-text">Date: {{ $movie['date'] }}</p>
                        <p class="card-text">Vote: {{ $movie['vote'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

</body>

</html>
