<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoUMKM.com</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{url('assets/css/header-style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/detail-style.css')}}">
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="{{url('assets/img/logo.png')}}" alt="logo InfoUMKM.com">
            <h3>INFOUMKM.COM</h3>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="{{url('/')}}">Home</a> </li>
                <li><a href="{{url('/umkm')}}">UMKM</a></li>
                <li><a href="{{url('/favorite')}}">Favorite</a></li>
                <li><a href="">About us</a></li>
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
                    <li><a href="{{url('/')}}">Home</a> </li>
                    <li><a href="{{url('/umkm')}}">UMKM</a></li>
                    <li><a href="{{url('/favorite')}}">Favorite</a></li>
                    <li><a href="">About us</a></li>
                    <li><a href="{{url('auth/register')}}">Daftar</a></li>
                    <li><a href="{{url('auth/')}}">Masuk</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main class="content">
        <div class="header-content">
            <h1>CARI INFO UMKM KAMU <br> HANYA DI <span style="color: #0F3555;">INFOUMKM.COM</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut.</p>
        </div>
        <div class="main-content">
            <div class="detail-card">
                <div class="detail">
                    <div class="left">
                        <img src="{{url('StoresImg/'.$store->store_image)}}" style="object-fit: cover" alt="resto">
                        <div class="small-image">
                            <img src="./img/resto.webp" alt="resto">
                            <img src="./img/resto.webp" alt="resto">
                            <img src="./img/resto.webp" alt="resto">
                        </div>
                    </div>
    
                    <div class="right">
                        <div id="title">
                            <h1>{{$store->store_name}}</h1>
                        </div>
                        <div class="desc">
                            <h3>★ ★ ★ ★ ★ | {{$store->rating}} Penilian | {{$store->store_address}}</h3>
                            <p>Lokasi : {{$store->store_address}}</p>
                            <p>Website : -</p>
                            <p>Contact : -</p>
                            <p>Deskripsi : {{$store->description}}</p>
                        </div>
                        <a href="{{url('store/'.$store->id_store.'/rating')}}" class="button">Beri Komentar</a>
                    </div>
                </div>
            </div>
    
            <div class="produk">
                <div class="title-produk">
                    <h1>Produk</h1>
                    <div class="list">
                        <div class="list-item">
                            <img src="./img/resto.webp" alt="resto">
                            <div class="name"><h2>Bakso</h2></div>
                            <h3>Rp. 15.000</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="list-item">
                            <img src="./img/resto.webp" alt="resto">
                            <div class="name"><h2>Ketoprak</h2></div>
                            <h3>Rp. 15.000</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                        <div class="list-item">
                            <img src="./img/resto.webp" alt="resto">
                            <div class="name"><h2>Rendang</h2></div>
                            <h3>Rp. 15.000</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
