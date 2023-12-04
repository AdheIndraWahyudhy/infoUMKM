<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoUMKM.com</title>
    <link rel="stylesheet" href="{{url('assets/css/header-style.css')}}">
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
                <li><a href="{{url('/')}}">Home</a> </li>
                <li><a href="{{url('/umkm')}}">UMKM</a></li>
                <li><a href="{{url('/favorite')}}">Favorite</a></li>
                <li><a href="">About us</a></li>
                <li class="right"><a href="{{url('auth/register')}}">Daftar</a></li>
                <li class="right" style="color: #087292; width: 5px;">|</li>
                <li class="right"><a href="{{url('auth/')}}">Masuk</a></li>
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
            <h1>Kategori <span style="color: #0F3555;">{{$categoryName}}</span></h1>
            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut.</p> --}}
        </div>
        @if ($stores->count() != 0)
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
        @else
            <h3 class="info">Belum ada Toko dengan kategori {{$categoryName}}</h3>
        @endif
        
    </main>
</body>
</html>
