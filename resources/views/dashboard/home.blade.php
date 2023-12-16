<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{url('assets/css/home-style.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/header-style.css')}}" />
    <title>INFO UMKM | Beranda</title>
    <link rel="icon" href="{{url('assets/img/logo.png')}}">
  </head>
  <body>
    <header>
      <div class="header">
        <div class="logo">
          <img src="{{url('assets/img/logo.png')}}" alt="logo InfoUMKM.com">
          <h3>INFOUMKM.COM</h3>
        </div>
        <nav class="menu">
          <ul>
            <li><a href="{{url('/')}}">Beranda</a> </li>
            <li><a href="{{url('/umkm')}}">UMKM</a></li>
            <li><a href="{{url('/favorite')}}">Favorit</a></li>
            <li><a href="{{url('/aboutus')}}">Tentang Kami</a></li>
            <li><a href="{{url('auth/register')}}">Daftar</a></li>
            <li style="color: #087292; width: 5px;">|</li>
            <li><a href="{{url('auth/')}}">Masuk</a></li>
          </ul>
        </nav>
        <div class="main-sidebar">
          <input type="checkbox" id="check" checked>
          <label for="check">
            <i class="fas fa-bars" id="open"></i>
          </label>
          <div class="sidebar">
            <label for="check">
              <i class="fas fa-bars" id="btn"></i>
            </label>
            <ul>
              <li><a href="{{url('/')}}">Beranda</a> </li>
              <li><a href="{{url('/umkm')}}">UMKM</a></li>
              <li><a href="{{url('/favorite')}}">Favorit</a></li>
              <li><a href="{{url('/aboutus')}}">Tentang Kami</a></li>
              <li><a href="{{url('auth/register')}}">Daftar</a></li>
              <li><a href="{{url('auth/')}}">Masuk</a></li>
            </ul>
          </div>
        </div>
      </div>
          
      {{-- <div class="hero" style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)) url('{{url('assets/img/bannerHome.jpg')}}');background-size: cover;"> --}}
      <div class="hero" style="background:linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 1)), url('{{url('assets/img/bannerHome.jpg')}}');background-size: cover;">
        <div class="container">
          <div class="box-hero">
            <div class="box">
              <h1>
                CARI INFO UMKM <br />
                HANYA DI INFOUMKM.COM
              </h1>
              <p>Tersedia dalam genggamanmu, InfoUMKM.com menjadi jembatan antara penjual dan pembeli! Temukan beragam toko UMKM dari berbagai pemilik di InfoUMKM.com, dengan informasi yang lengkap mulai dari produk unggulan hingga ulasan pelanggan</p>
              <a href="{{url('/umkm')}}">
                <button>List UMKM</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="services" id="services">
      <div class="container">
        <div class="box-services">
          <div class="box">
            <i class="fa-solid fa-coins"></i>
            <h4>Daftar Restoran</h4>
            <p>Menyediakan informasi berbagai toko UMKM.</p>
          </div>
          <div class="box">
            <i class="fa-solid fa-certificate"></i>
            <h4>Rating</h4>
            <p>Berikan ulasan dan ratingmu untuk menilai toko.</p>
          </div>
          <div class="box">
            <i class="fa-solid fa-people-roof"></i>
            <h4>Favorite</h4>
            <p>Temukan toko favorite dengan rating tertinggi.</p>
          </div>
        </div>
      </div>
    </div>
    <h2 id="kategori">Kategori</h2>
    <div class="restoran" id="restoran">
      <div class="container">
        <div class="box-restoran">
          <div class="box">
            <img src="{{url('assets/img/kuliner.jpg')}}" alt="" style="object-fit:cover"/>
            <h3>Kuliner</h3>
            <a href="{{url('category/1')}}">
              <button style="color:white;">Kunjungi</button>
            </a>
          </div>
          <div class="box">
            <img src="{{url('assets/img/fashion.jpg')}}" alt="" style="object-fit:cover"/>
            <h3>Fashion</h3>
            <a href="{{url('category/2')}}">
              <button style="color:white;">Kunjungi</button>
            </a>
          </div>
          <div class="box">
            <img src="{{url('assets/img/service.jpg')}}" alt="" style="object-fit:cover"/>
            <h3>Jasa</h3>
            <a href="{{url('category/3')}}">  
              <button style="color:white;">Kunjungi</button>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="container">
        <div class="box-footer">
          <div class="box">
            <h2>INFOUMKM</h2>
            <p>Website InfoUMKM.com ini merupakan sistem informasi yang menyediakan informasi UMKM dan produknya yang menjadi wadah dalam membantu promosi dan pemasaran UMKM.</p>
          </div>
          <div class="box">
            <h3>Menu</h3>
            <a href="#home">Beranda</a>
            <a href="{{url('/umkm')}}">UMKM</a>
            <a href="{{url('/favorite')}}">Favorit</a>
            <a href="{{url('/')}}">Tentang Kami</a>
          </div>
          <div class="box">
            <p>&copy; Copyright by <span>Capstone Team | Dicoding Indonesia</span> All Rights Reserved 2023, Indonesia</p>
          </div>
        </div>
      </div>
    </div>

    <script src="{{url('assets/js/home-script.js')}}"></script>
  </body>
</html>
