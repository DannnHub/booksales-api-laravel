<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Authors</title>
</head>
<body>
    <h1>Ini adalah halaman yang menampilkan informasi tentang para author buku</h1>

    @foreach ($authors as $author)
    <ul>
        <li>{{$author['name']}}</li>
        <li>{{$author['bio']}}</li>
        <li>{{$author['photo']}}</li>
    </ul>
    @endforeach
</body>
</html>