<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categories</title>
</head>
<body>
    <h1>Все категории</h1>
    @foreach($categories as $category)
        <div style="margin: 20px; padding: 10px; background-color: gray; width: 300px;"  >
            <img src="{{ $category['image'] }}" alt="" width="200"><br>
            <a href="{{ route('news.categories.show', ['id' => $category['id']])}}"> {{ $category['title'] }}</a><br>
            <p>{{ $category['description'] }}</p>

        </div>
    @endforeach
</body>
</html>