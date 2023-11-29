<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{url('auth/')}}">Login</a> | <a href="{{url('auth/register')}}">Daftar</a>
    
    <h1>Kategori</h1>
    @foreach ($categories as $category)
        <img src="" alt="">
        <a href="{{url('category/'.$category->id_category)}}"><h3>{{$category->category_name}}</h3></a>
    @endforeach
</body>
</html>