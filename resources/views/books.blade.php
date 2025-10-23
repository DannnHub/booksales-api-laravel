<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
</head>
<body>
    <h1>Selamat Datang di Toko BookSales!</h1>
    <p>Berikut adalah buku-buku yang tersedia di toko kami:</p>

    @foreach ($books as $book)
    <ul>
        <li>{{$book['title']}}</li>
        <li>{{$book['description']}}</li>
        <li>{{$book['price']}}</li>
        <li>{{$book['stock']}}</li>
        <li>{{$book['cover_photo']}}</li>
        <li>{{$book['genre_id']}}</li>
        <li>{{$book['author_id']}}</li>
    </ul>
    @endforeach
</body>
</html>