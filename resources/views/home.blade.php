<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel-model-controller</title>
    <style>

        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
        }
        
        ul {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 100vw;
            margin: 0;
            padding: 0;
        }

        li {
            display: flex;
            list-style: none;
        }

        .card {
            display: inline-flex;
            flex-direction: column;
            width: 160px;
            border: 1px solid grey;
            border-radius: 8px;
            margin: 8px;
            text-align: center;
            padding: 4px;
        }

        h2 {
            flex-grow: 1;
        }


    </style>
</head>
<body>
    <div class="container">
        <h1>Movies</h1>
        <ul>
            @foreach ($movies as $movie)
                <li>
                    <div class="card">
                        <h2>
                            {{$movie['title']}}
                        </h2>
                        <p>
                            {{$movie['date']}}
                        </p>
                        <p>
                            <strong>IMDB: {{$movie['vote']}}</strong>
                        </p>
                    </div>
                </li>
            @endforeach
        </ul>    
    </div>
</body>
</html>