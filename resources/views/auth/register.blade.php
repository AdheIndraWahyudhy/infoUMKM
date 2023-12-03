<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{url('assets/css/register-style.css')}}">
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="{{url('assets/img/logo.png')}}" alt="logo InfoUMKM.com">
            <h3>INFOUMKM.COM</h3>
        </div>
    </header>
    <form action="{{url('auth/register/create')}}" method="POST" class="quickForm">
        @csrf
        <h2>Register</h2>
        <label for="name">User Name</label>
        <input type="text" id="name" name="name" class="form-control" value="{{Session::get('name')}}">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{Session::get('email')}}">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" class="form-control" >
        <label for="number_phone">No HP</label>
        <input type="text" name="number_phone" id="number_phone" class="form-control" value="{{Session::get('number_phone')}}">
        <input type="submit" value="Daftar" class="btn btn-success">
        <p><span style="color: #A8A8A8;">Sudah punya akun?</span><a href="{{url('/auth')}}">Login</a></p>
    </form>
    
</body>
</html>
