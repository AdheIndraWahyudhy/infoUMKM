<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{url('assets/css/login-style.css')}}">
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="{{url('assets/img/logo.png')}}" alt="logo InfoUMKM.com">
            <h3>INFOUMKM.COM</h3>
        </div>
        <nav class="menu">
            <ul>
                <li>Home</li>
                <li>UMKM</li>
                <li>Favorite</li>
                <li>About us</li>
            </ul>
        </nav>
        <div class="main-sidebar">
            <input type="checkbox" id="check">
            <label for="check">
                <i class="fas fa-bars" id="open"></i>
            </label>
            <div class="sidebar">
                <label for="check">
                    <i class="fas fa-bars" id="btn"></i>
                </label>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">UMKM</a></li>
                    <li><a href="">Favorite</a></li>
                    <li><a href="">About us</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="main">
        <div class="gambar">
            <img src="{{url('assets/img/group14.png')}}" alt="toko">
        </div>
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
    </div>
</body>
</html>
