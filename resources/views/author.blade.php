<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Authors</title>
</head>
<body>
    <H1>List Author</H1>

    @foreach ($authors as $A)
    <ul>
        <li>{{$A['name']}}</li>
        <li>{{$A['cover_photo']}}</li>
        <li>{{$A['bio']}}</li>
    </ul>
    @endforeach
    
</body>
</html>