<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form action="{{url('auth/register/create')}}" method="POST">
        @csrf
        <label for="name">User Name</label>
        <input type="text" id="name" name="name" class="form-control" value="{{Session::get('name')}}">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{Session::get('email')}}">
        <label for="password">Password</label>
        <input type="text" id="password" name="password" class="form-control" >
        <label for="number_phone">No HP</label>
        <input type="text" name="number_phone" id="number_phone" class="form-control" value="{{Session::get('number_phone')}}">
        <input type="submit" value="Daftar" class="btn btn-success">
        Sudah punya akun? Klik disini <a style="color: rgb(217, 255, 0)" href="{{url('/auth')}}">Login</a>
    </form>
    
</body>
</html>
