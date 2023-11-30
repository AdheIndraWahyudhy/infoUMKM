<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{url('assets/css/login-style.css')}}">
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="{{url('assets/img/logo.png')}}" alt="logo InfoUMKM.com">
            <h3>INFOUMKM.COM</h3>
        </div>
    </header>
    <form action="{{url('auth/login')}}" method="POST" class="quickForm">
        @csrf
        <h2>Login</h2>
        <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" class="form-control" id="username" name="username" value="{{Session::get('name')}}">
        </div>
        <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" class="form-control" id="pass" name="password">    
        </div>
        <div class="bawah">
            <input type="submit" value="Login" class="btn btn-primary btn-sm">
            <div>
                <span style="color: #A8A8A8;">Belum punya akun?</span> <a  href="{{url('/auth/register')}}">Daftar</a>
            </div>
        </div>
    </form>
</body>
</html>
