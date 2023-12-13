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
    <link rel="stylesheet" href="{{url('assets/css/detail-laporan-style.css')}}">
</head>
<body>
    <!-- NAVBAR -->
    <header class="header">
        <div class="logo">
            <img src="{{url('assets/img/logo.png')}}" alt="logo InfoUMKM.com">
            <h3>INFOUMKM.COM</h3>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="{{url('/admin/users')}}">Pengguna</a></li>
                <li><a href="{{url('/admin/reports')}}">Laporan</a></li>
                <li><a href="{{url('/admin/profile')}}">Profil</a></li>
                <li><i class="fa-solid fa-user"></i>Halo, {{$admin}}</li>
                <li><a href="{{url('auth/logout/admin')}}">Logout <i class="fa-solid fa-right-from-bracket"></i></a></li>
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
                    <li><a href="{{url('/admin/users')}}">Pengguna</a></li>
                    <li><a href="{{url('/admin/reports')}}">Laporan</a></li>
                    <li><a href="{{url('/admin/profile')}}">Profil</a></li>
                    <li><a href="{{url('auth/logout/admin')}}">Keluar</a></li>
                </ul>
            </div>
        </div>
    </header>
    </header>
    <main class="content">
        <div class="header-content">
            <h1>CARI INFO UMKM KAMU <br> HANYA DI <span style="color: #0F3555;">INFOUMKM.COM</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut.</p>
        </div>

    <!-- Laporan  -->
    <div class="title">
        <div class="form-header">
            <h2>Detail Laporan</h2>
        </div>
    </div>
    @if ($reports->count() != 0)
        @foreach ($reports as $report)
            <div class="form-container">
                <div class="section">
                    <p class="date">{{ $report->created_at->format('d-m-y') }}</p>
                    <p>{{$report->message}}</p>
                </div>
            </div>
        @endforeach
    @else
        <div class="form-container bg-green">
            <h3>Toko Tidak Bermasalah</h3>
        </div>
    @endif
    
    
    <div class="back-button">
        <a href="{{url('admin/')}}">Kembali</a>
    </div>
</body>
</html>
