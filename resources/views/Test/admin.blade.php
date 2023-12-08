<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <h2>Admin</h2>
    <h1>ini {{$name}}</h1>
    <a href="{{url('auth/logout/admin')}}"><b>Logout -> </b></a>
    <table border="1">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Toko</th>
                <th>Email</th>
                <th>No Hp</th>
                <th>Laporan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>
                        @foreach ($stores as $store)
                            @if ( $store->user_id == $user->id)
                                {{$store->store_name}}
                            @endif
                        @endforeach
                    </td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->number_phone}}</td>
                    <td><a href="">@if (isset($user->riport))
                        {{$user->riport}}
                    @else
                        0
                    @endif Laporan</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
