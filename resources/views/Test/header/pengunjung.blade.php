<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./header.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="./img/logo.png" alt="logo InfoUMKM.com">
            <h3>INFOUMKM.COM</h3>
        </div>
        <nav class="menu">
            <ul>
                <li>Beranda</li>
                <li>UMKM</li>
                <li>Favorit</li>
                <li>Tentang kami</li>
                <li><a href="{{url('auth/register')}}">Daftar</a></li>
                <li style="color: #087292; width: 5px;">|</li>
                <li><a href="{{url('auth/')}}">Masuk</a></li>
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
                    <li><a href="">Beranda</a></li>
                    <li><a href="">UMKM</a></li>
                    <li><a href="">Favorit</a></li>
                    <li><a href="">Tentang kami</a></li>
                    <li class="right"><a href="{{url('auth/register')}}">Daftar</a></li>
                    <li class="right"><a href="{{url('auth/')}}">Masuk</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main class="content">
        <div class="header-content">
            <h1>CARI INFO UMKM KAMU <br> HANYA DI <span style="color: #0F3555;">INFOUMKM.COM</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut.</p>
        </div>
        <!-- konten seterusnya disini -->
    </main>
</body>
</html>
