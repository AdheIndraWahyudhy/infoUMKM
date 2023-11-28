<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kategori</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h1>Toko Berdasarkan kategori</h1>
    @foreach ($stores as $store)
        <a href="{{url('store/detail/'.$store->id_store)}}">{{$store->store_name}}</a>
    @endforeach
</body>
</html>