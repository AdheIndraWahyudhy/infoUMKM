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
    <link rel="stylesheet" href="produk.css">
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

        <!-- Produk -->
        <div class="title">
            <div class="form-header">
                <h2>Produk</h2>
                <div class="form-buttons">
                    <button id="submitBtn" type="submit">Simpan</button>
                    <button id="cancelBtn" type="cancel">Batal</button>
                </div>
            </div>
        </div>
        
        <div class="produk">
            <div class="form-container">
                <form id="productForm">
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" id="productName" required>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" id="productPrice" required>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select id="productCategory" required>
                            <option value="">Pilih Kategori...</option>
                            <option value="makanan">Makanan</option>
                            <option value="fashion">Fashion</option>
                            <option value="jasa">Jasa</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" id="productPhoto" accept=".png, .jpg, .jpeg" required>
                    </div>
                    <div class="form-group">
                        <label>Detail</label>
                        <textarea id="productDetail" required></textarea>
                    </div>
                </form>
            </div>
        </div>

        <!-- Pop Up Produk -->
        <div id="popup" class="popup">
            <div class="popup-content">
                <span class="close" onclick="closePopup()">&times;</span>
                <p id="popupMessage">Silakan Isi Semua Form</p>
                <button onclick="closePopup()">OK</button>
            </div>
        </div>
        
        <div id="successPopup" class="popup">
            <div class="popup-content">
                <span class="close" onclick="closeSuccessPopup()">&times;</span>
                <p id="successMessage">Produk Berhasil Ditambahkan</p>
                <button onclick="closeSuccessPopup()">OK</button>
            </div>
        </div>

        <div id="editConfirmationPopup" class="popup">
            <div class="popup-edit-content">
                <span class="close" onclick="closeEditConfirmationPopup()">&times;</span>
                <p>Anda yakin akan mengedit?</p>
                <button onclick="proceedWithEdit()">Yakin</button>
                <button onclick="closeEditConfirmationPopup()">Tidak</button>
            </div>
        </div>
        
        <div id="dataProduk" class="data-produk">
            <h2>Data Produk</h2>
            <div class="form-container">
                <table id="productTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Detail</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        
    </main>
    
    <script src="produk.js"></script>
</body>
</html>
