<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Buku</title>
</head>
<body>
    <H1>Katalog Buku</H1>

    @foreach ($books as $B)
    <ul>
        <li>{{$B['title']}}</li>
        <li>{{$B['description']}}</li>
        <li>{{$B['price']}}</li>
        <li>{{$B['stock']}}</li>
        <li>{{$B['genre_id']}}</li>
        <li>{{$B['author_id']}}</li>
    </ul>
    @endforeach
</body>
</html>