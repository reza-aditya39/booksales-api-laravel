<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Genre</title>
</head>
<body>
    <H1>Daftar Genre</H1>

    @foreach ($genres as $G)
    <ul>
        <li>{{$G['name']}}</li>
        <li>{{$G['description']}}</li>
    </ul>
    @endforeach
</body>
</html>