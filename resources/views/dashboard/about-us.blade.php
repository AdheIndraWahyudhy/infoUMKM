<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoUMKM | Tentang Kami</title>
    <link rel="icon" href="{{url('assets/img/logo.png')}}">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{('assets/css/footer-style.css')}}">
    <link rel="stylesheet" href="{{('assets/css/about-us.css')}}">
    <link rel="stylesheet" href="{{('assets/css/header-style.css')}}">
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
                <li><a href="{{url('/aboutus')}}">Tentang kami</a></li>
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
                    <li><a href="{{url('/')}}">Beranda</a></li>
                    <li><a href="{{url('/umkm')}}">UMKM</a></li>
                    <li><a href="{{url('/favorite')}}">Favorit</a></li>
                    <li><a href="{{url('/aboutus')}}">Tentang kami</a></li>
                    <li class="right"><a href="{{url('auth/register')}}">Daftar</a></li>
                    <li class="right"><a href="{{url('auth/')}}">Masuk</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main class="content">
        <div class="about">
            <h1>CARI INFO UMKM KAMU <br> HANYA DI <span style="color: #0F3555;">INFOUMKM.COM</span></h1>
            <p>
                Website InfoUMKM.com ini merupakan sistem informasi yang menyediakan informasi UMKM dan produknya yang menjadi wadah dalam membantu promosi dan pemasaran UMKM. Website informasi mengenai lapak penjualan ini bertujuan untuk memberikan dukungan yang sangat dibutuhkan kepada pedagang kecil dan individu yang ingin sukses dalam penjualan online. Dengan adanya website InfoUMKM ini diharapkan masyarakat lebih mudah dalam menemukan berbagai produk UMKM.
            </p>
        </div>
        <h1>OUR TEAM</h1>
        <div class="team">
            <div class="team-container" id="team1">
                <img src="{{url('assets/img/adhe.jpg')}}">
                <h2>Adhe Indra Wahyudhy</h2>
                <h4>Back-End Developer</h4>
                <p>Universitas Muhammadiyah Riau</p>
                <div class="social-media">
                    <a href="https://www.instagram.com/adhe_eeeee/"><i class="fa-brands fa-instagram"></i></i></a>
                    <a href="https://github.com/AdheIndraWahyudhy"><i class="fa-brands fa-github"></i></a>
                </div>
            </div>
            <div class="team-container" id="team2">
                <img src="{{url('assets/img/caecario.jpg')}}">
                <h2>Caecario Yonim Betta Sabillah</h2>
                <h4>Designer</h4>
                <p>Universitas Jember</p>
                <div class="social-media">
                    <a href="https://www.instagram.com/caecario.ybs_/"><i class="fa-brands fa-instagram"></i></i></a>
                    <a href="https://github.com/Caecario123"><i class="fa-brands fa-github"></i></a>
                </div>
            </div>
            <div class="team-container" id="team3">
                <img src="{{url('assets/img/gusta.png')}}">
                <h2>Aulia Augusta</h2>
                <h4>Front-End Developer</h4>
                <p>Universitas Jember</p>
                <div class="social-media">
                    <a href="https://www.instagram.com/gus.ta__/"><i class="fa-brands fa-instagram"></i></i></a>
                    <a href="https://github.com/auliaagst"><i class="fa-brands fa-github"></i></a>
                </div>
            </div>
            <div class="team-container" id="team4">
                <img src="{{url('assets/img/dimas.jpg')}}">
                <h2>Dimas Aryansyah</h2>
                <h4>Front-End Developer</h4>
                <p>Universitas Singaperbangsa Karawang</p>
                <div class="social-media">
                    <a href="https://www.instagram.com/aryandinataa/"><i class="fa-brands fa-instagram"></i></i></a>
                    <a href="https://github.com/DimasAryansyah"><i class="fa-brands fa-github"></i></a>
                </div>
            </div>
            <div class="team-container" id="team5">
                <img src="{{url('assets/img/vico.jpg')}}">
                <h2>Vico Pratama Fajareno</h2>
                <h4>Front-End Developer</h4>
                <p>Universitas Muhammadiyah Malang</p>
                <div class="social-media">
                    <a href="https://www.instagram.com/vico_prtma27/"><i class="fa-brands fa-instagram"></i></i></a>
                    <a href="https://github.com/VicoPratama"><i class="fa-brands fa-github"></i></a>
                </div>
            </div>
        </div>
    </main>
    @include('footer/footer-visitor')
</body>
</html>
