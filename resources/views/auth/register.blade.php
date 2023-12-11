<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{url('assets/css/register-style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/alert-style.css')}}">

</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="{{url('assets/img/logo.png')}}" alt="logo InfoUMKM.com">
            <h3>INFOUMKM.COM</h3>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="{{url('/')}}">Beranda</a></li>
                <li><a href="{{url('/umkm')}}">UMKM</a></li>
                <li><a href="{{url('/favorite')}}">Favorit</a></li>
                <li>Tentang kami</li>
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
                    <li><a href="{{url('/')}}">Beranda</a></li>
                    <li><a href="{{url('/umkm')}}">UMKM</a></li>
                    <li><a href="{{url('/favorite')}}">Favorit</a></li>
                    <li><a href="">Tentang kami</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="main">
        <img src="{{url('assets/img/group14.png')}}" alt="toko">
        <form action="{{url('auth/register/create')}}" method="POST" class="quickForm">
            @csrf
            @include('message.notification')
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
    </div>
</body>
</html>
