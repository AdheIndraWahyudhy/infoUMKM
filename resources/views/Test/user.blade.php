<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <h2>User</h2>
    <a href="auth/logout/user"><b>Logout -> </b></a>
    <h1>Hallo, {{$user}}</h1>
    @if ($store != null)
        <h1>Anda sudah memiliki toko</h1>
    @else
        Buat toko anda <a href="{{url('/store')}}">Sekarang</a>
    @endif
</body>
</html>
