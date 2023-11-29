<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h2>Admin</h2>
    <h1>ini {{$nama}}</h1>
    <a href="{{url('auth/logout/admin')}}"><b>Logout -> </b></a>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>No Hp</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->number_phone}}</td>
                    <td><a href="">Lihat Produk</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
