<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoUMKM.com | User</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{url('assets/css/header-style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/umkm-style.css')}}">
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="{{url('assets/img/logo.png')}}" alt="logo InfoUMKM.com">
            <h3>INFOUMKM.COM</h3>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="{{url('user/')}}">UMKM</a></li>
                <li><a href="{{url('user/account')}}">Account</a></li>
                <li><a href="{{url('user/store')}}">Store</a></li>
                @if ($store != null)
                    <li><a href="{{url('user/product')}}">Product</a></li>
                @endif
                <li><i class="fa-solid fa-user" ></i>Hallo, {{$user}}</li>
                <li><a href="{{url('auth/logout/user')}}">Logout <i class="fa-solid fa-right-from-bracket"></i></a></li>
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
                    <li><a href="">UMKM</a></li>
                    <li><a href="">Account</a></li>
                    <li><a href="">Store</a></li>
                    @if ($store != null)
                    <li><a href="">Product</a></li>
                    @endif
                    <li><a href="{{url('auth/logout/user')}}">Logout</a></li>
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