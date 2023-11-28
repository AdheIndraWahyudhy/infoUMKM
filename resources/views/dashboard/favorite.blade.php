<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoUMKM.com</title>
    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inria+Sans:wght@400;700&family=K2D:wght@300;600&display=swap');

        * {
            margin: 0;
            padding: 0;
            width: 100%;
        }

        /* Basic Styles */
        body {
            box-sizing: border-box;
            font-family: Inria Sans;
            line-height: 1.6;
            color: #333;
            background-color: #f8f8f8;
            max-width: 100%;
            margin: 0 auto;
        }

        /* Header Styles */
        .header {
            display: flex;
            flex: 1;
            align-items: center;
            background-color: #fff;
            color: #06546f;
            position: fixed;
            top: 0;
            width: 100%;
            padding: 15px 0;
            z-index: 1000;
        }

        .logo {
            display: flex;
            padding-left: 15px;
        }

        .logo img {
            width: 40px;
            height: 40px; 
            margin-right: 10px;
        }

        .logo h3 {
            font-size: 1.5em;
            font-family: K2D;
        }

        .menu {
            text-align: center;
        }

        .menu li:hover {
            text-decoration: none;
            background-color: #087292;
            border-radius: 15px;
            padding: 8px;
            color: #fff;
            transition: 0.3s;
        }

        .menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .menu ul li {
            display: inline;
            margin-right: 20px;
        }

        ul li:last-child {
            margin-right: 0;
        }

        ul li.right {
            margin-left: auto;
        }

        .content {
            width: 100%;
        }

        .header-content {
            background: linear-gradient(93deg, #1B81D7 16.71%, #05B7D0 98.22%);
            color: #fff;
            width: 100%;
            max-height: 264px;
            padding-top: 100px;
            padding-bottom: 30px;
            text-align: center;
        }

        .header-content h1 {
            font-size: 50px;
            letter-spacing: -2.5px;
            text-align: center;
            padding-bottom: 10px;
        }

        .header-content p  {
            padding-bottom: 10px;
            font-size: 15px;
        }

        .main-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            box-sizing: border-box;
            padding: 70px;
        }

        .umkm-container {
            width: calc(33.33% - 20px);
            border: 1px solid #178BD6;
            border-radius: 8px;
            box-sizing: border-box;
            padding: 15px;
            text-align: center;
            margin-bottom: 30px;
        }

        .umkm-container img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }

        .umkm-container h3 {
            color: #087292;
        }

        .umkm-container p {
            color: #555;
        }

        button {
            background-color: #178BD6;;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin: 10px;
            cursor: pointer;
            border-radius: 5px;
            height: 33px;
            width: 100px;
        }

        button:hover {
            background-color: #06546f;
        }

        .rating {
            margin-top: 10px;
            padding: 5px;
        }

        .star {
            font-size: 1.5em;
            color: #FFD700; /* warna bintang diisi */
        }

        @media (max-width: 965px) {
        }

        @media (max-width: 768px) {
            .umkm-container {
                width: calc(50% - 20px);
            }
            .header-content h1 {
                font-size: 35px;
            }
            .header-content p {
                font-size: 10px;
            }
        }

        @media (max-width:550px) {
            .umkm-container {
                width: calc(100% - 20px);
            }
            .header-content h1 {
                font-size: 30px;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="./img/logo.png" alt="logo InfoUMKM.com">
            <h3>INFOUMKM.COM</h3>
        </div>
        <nav class="menu">
            <ul>
                <li>HOME</li>
                <li>UMKM</li>
                <li>FAVORITE</li>
                <li>ABOUT-US</li>
                <li class="right">Daftar</li>
                <li class="right" style="color: #087292; width: 5px;">|</li>
                <li class="right">Masuk</li>
            </ul>
        </nav>
    </header>
    <main class="content">
        <div class="header-content">
            <h1>CARI INFO UMKM KAMU <br> HANYA DI <span style="color: #0F3555;">INFOUMKM.COM</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut.</p>
        </div>
        <div class="main-content">
            <div class="umkm-container">
                <img src="./img/gambar.png" alt="toko">
                <h3>Nasi Padang Slawu</h3>
                <p>Jl. Kalimantan No.57</p>
                <div class="rating">
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9733;</span>
                    <span class="star">&#9734;</span>
                </div>
                <button>Detail</button>
            </div>
            <div class="umkm-container">
                <img src="./img/gambar.png" alt="toko">
                <h3>Nasi Padang Slawu</h3>
                <p>Jl. Kalimantan No.57</p>
                <!-- rate -->
                <button>Detail</button>
            </div>
            <div class="umkm-container">
                <img src="./img/gambar.png" alt="toko">
                <h3>Nasi Padang Slawu</h3>
                <p>Jl. Kalimantan No.57</p>
                <!-- rate -->
                <button>Detail</button>
            </div>
            <div class="umkm-container">
                <img src="./img/gambar.png" alt="toko">
                <h3>Nasi Padang Slawu</h3>
                <p>Jl. Kalimantan No.57</p>
                <!-- rate -->
                <button>Detail</button>
            </div>
        </div>
    </main>
</body>
</html>
