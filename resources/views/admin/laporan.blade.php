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
    <link rel="stylesheet" href="laporan.css">
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
                <li><a href="">Pengguna</a></li>
                <li><a href="">Laporan</a></li>
                <li><a href="">Profil</a></li>
                <li><a><i class="fa-solid fa-user"></i>Halo, Admin</a></li>
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
                    <li><a href="">Pengguna</a></li>
                    <li><a href="">Laporan</a></li>
                    <li><a href="">Profil</a></li>
                    <li>Keluar</a></li>
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
            <h2>Laporan</h2>
        </div>
    </div>

    <div id="laporanToko" class="laporan-toko">
        <div class="form-container">
            <table id="laporanTable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama User</th>
                        <th>Toko</th>
                        <th>Email</th>
                        <th>Total Laporan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

    <script src="laporan.js"></script>
</body>
</html>
