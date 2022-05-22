<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <div style="margin: 20px; padding: 10px; background-color: gray; width: 300px;"  >
            <img src="{{ $news->image }}" alt="" width="200"><br>
            <h2> {{ $news->title }}</h2><br>
            <p>Автор {{$news->author}}</p><br>
            <p>{{ $news->description }}</p><br>

        </div>
</body>
</html>