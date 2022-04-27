<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>Новости категории: {{ $category['title'] }}</h1>
            

        </div>

            @foreach($category['news'] as $news)
                <div style="margin: 20px; padding: 10px; background-color: gray; width: 300px;"  >
                    <img src="{{ $news['image'] }}" alt="" width="200"><br>
                    <a href="{{ route('news.show', ['id' => $news['id']])}}"> {{ $news['title'] }}</a><br>
                    <p>Автор {{$news['author']}}</p><br>
                    <p>{{ $news['description'] }}</p>

                </div>
            @endforeach
</body>
</html>