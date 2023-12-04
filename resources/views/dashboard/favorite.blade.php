<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoUMKM.com</title>
    <link rel="stylesheet" href="{{url('assets/css/favorite-style.css')}}">
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="{{url('assets/img/logo.png')}}" alt="logo InfoUMKM.com">
            <h3>INFOUMKM.COM</h3>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="{{url('/')}}">HOME</a> </li>
                <li><a href="{{url('/umkm')}}">UMKM</a></li>
                <li><a href="{{url('/favorite')}}">FAVORITE</a></li>
                <li><a href="">ABOUT-US</a></li>
                <li class="right"><a href="{{url('auth/register')}}">Daftar</a></li>
                <li class="right" style="color: #087292; width: 5px;">|</li>
                <li class="right"><a href="{{url('auth/')}}">Masuk</a></li>
            </ul>
        </nav>
    </header>
    <main class="content">
        <div class="header-content">
            <h1>CARI INFO UMKM KAMU <br> HANYA DI <span style="color: #0F3555;">INFOUMKM.COM</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut.</p>
        </div>
        <div class="main-content">
            @foreach ($stores as $store)
                <div class="umkm-container">
                    <img src="{{url('StoresImg/'.$store->store_image)}}" alt="toko">
                    <h3>{{$store->store_name}}</h3>
                    <p>{{$store->store_address}}</p>
                    <div class="rating">
                        @for ($i = 0; $i < 5; $i++)
                            @if ($i < round($store->rating))
                                <span class="star">&#9733;</span>
                            @else
                                <span class="star">&#9734;</span>
                            @endif
                        @endfor
                    </div>
                    <p> Rate {{$store->rating}}</p>
                    <a href="{{url('store/'.$store->id_store)}}">
                        <button>Detail</button>
                    </a>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>
