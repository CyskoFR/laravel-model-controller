<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie</title>
</head>
<body>
    <h1>{{$movie->title}}</h1>
    <h2>{{$movie->original_title}}</h2>
    <h3>{{$movie->nationality}}</h3>
    <p>{{$movie->date}}</p>
    <p>{{$movie->vote}}</p>
    <br>
    <a href="{{route('home')}}"><button>Home</button></a>
</body>
</html>