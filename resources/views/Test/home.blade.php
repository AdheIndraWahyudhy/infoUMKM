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
    <link rel="stylesheet" href="dist/css/style.css" />
    <title>INFO UMKM</title>
  </head>
  <body>
    <header>
      <div class="navbar">
        <div class="container">
          <div class="box-navbar">
            <div class="logo">
              <h1>INFOUMKM</h1>
            </div>
            <ul class="menu">
              <li><a href="#home">Home</a></li>
              <li><a href="#services">UMKM</a></li>
              <li><a href="#pantai">Favorite</a></li>
              <li><a href="#pantai">Contact</a></li>
              <li class="active"><a href="#daftar">Daftar</a></li>
              <li class="active"><a href="#masuk">Masuk</a></li>
            </ul>
            <i class="fa-solid fa-bars menu-bar"></i>
          </div>
        </div>
      </div>

      <div class="hero">
        <div class="container">
          <div class="box-hero">
            <div class="box">
              <h1>
                CARI INFO UMKM KAMU <br />
                HANYA DI INFOUMKM.COM
              </h1>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, autem?</p>
              <button>Daftar UMKM <br/>
              Cari daftar restoran yang tersedia</button>
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, labore.</p>
          </div>
          <div class="box">
            <i class="fa-solid fa-certificate"></i>
            <h4>Rating</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, labore.</p>
          </div>
          <div class="box">
            <i class="fa-solid fa-people-roof"></i>
            <h4>Favorite</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, labore.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="restoran" id="restoran">
      <div class="container">
        <div class="box-restoran">
          <div class="box">
            <img src="assets/img/Gambar_Toko.png" alt="" />
            <h3>Nasi Padang Slawu</h3>
            <p>Jl. Kalimantan No. 57</p>
            <button>Detail</button>
          </div>
          <div class="box">
            <img src="assets/img/Gambar_Toko.png" alt="" />
            <h3>Nasi Padang Slawu</h3>
            <p>Jl. Kalimantan No. 57</p>
            <button>Detail</button>
          </div>
          <div class="box">
            <img src="assets/img/Gambar_Toko.png" alt="" />
            <h3>Nasi Padang Slawu</h3>
            <p>Jl. Kalimantan No. 57</p>
            <button>Detail</button>
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="container">
        <div class="box-footer">
          <div class="box">
            <h2>INFOUMKM</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laboriosam eius rerum quisquam perspiciatis obcaecati, quasi temporibus aperiam iusto aliquam doloremque.</p>
          </div>
          <div class="box">
            <h3>Menu</h3>
            <a href="#home">Home</a>
            <a href="#umkm">UMKM</a>
            <a href="#favorite">Favorite</a>
            <a href="#contact">Contact</a>
          </div>
          <div class="box">
            <p>&copy; Copyright by <span>Capstone Team | Dicoding Indonesia</span> All Rights Reserved 2023, Indonesia</p>
          </div>
        </div>
      </div>
    </div>

    <script src="dist/js/script.js"></script>
  </body>
</html>
