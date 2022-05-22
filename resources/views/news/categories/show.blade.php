<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>Новости категории: {{ $titleCategory }}</h1>
        

            @foreach($newsList as $news)
                <div style="margin: 20px; padding: 10px; background-color: gray; width: 300px;"  >
                    <p> {{ $news->title }}</p><br>
                    <p>Автор {{$news->author}}</p><br>
                    <p>{{ $news->description }}</p>

                </div>
            @endforeach
</body>
</html>