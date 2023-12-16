<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoUMKM.com | Product</title>
    <link rel="icon" href="{{url('assets/img/logo.png')}}">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{url('assets/css/produk-style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/header-style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/alert-style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/footer-style.css')}}">
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
                <li><a href="{{url('user/account')}}">Akun</a></li>
                <li><a href="{{url('user/store')}}">Toko</a></li>
                @if ($store != null)
                    <li><a href="{{url('user/product')}}">Produk</a></li>
                @endif
                <li><i class="fa-solid fa-user" ></i>Hallo, {{$user}}</li>
                <li><a href="{{url('auth/logout/user')}}"><i class="fa-solid fa-right-from-bracket"></i></a></li>
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
                    <li><a href="{{url('user/')}}">UMKM</a></li>
                    <li><a href="{{url('user/account')}}">Akun</a></li>
                    <li><a href="{{url('user/store')}}">Toko</a></li>
                    @if ($store != null)
                        <li><a href="{{url('user/product')}}">Produk</a></li>
                    @endif
                    <li><a href="{{url('auth/logout/user')}}">Logout</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main class="content">
        <div class="header-content" style="background: url('{{url('assets/img/banner.png')}}')">
            <h1>CARI INFO UMKM KAMU <br> HANYA DI <span style="color: #0F3555;">INFOUMKM.COM</span></h1>
            <p> Jelajahi ragam toko dan dukung pertumbuhan bisnis lokal melalui InfoUMKM.com</p>
        </div>

        <!-- Produk -->
        <div class="title">
            <div class="form-header">
                
                <h2>Produk</h2>
                {{-- <div class="form-buttons">
                    <button id="submitBtn" type="submit">Simpan</button>
                    <button id="cancelBtn" type="cancel">Batal</button>
                </div> --}}
            </div>
        </div>

        @if ($store->status == 'Bermasalah')
            <div class="produk">

                <div class="form-container">
                    <h3><i>Hallo, {{$user}} <br> <br>Toko anda banyak mendapat laporan dari pengunjung, Kami telah mengirim alasan mengapa akun anda dibekukan. Diharapkan anda membalas Email kami jika laporan dari pihak pengunjung tidak benar beserta bukti yang memperkuat bahwa toko anda tidak bermasalah!</i></h3>
                    <br>
                    <h3><i>Jika anda tidak mengonfirmasi dalam 1 minggu, Kami anggap Laporan tersebut benar dan akun Anda akan terHapus</i></h3>
                </div>
            </div>
        @else
            <div class="produk">
                <div class="form-container">
                    <form id="productForm"
                    @if (isset($edit))
                        action="{{url('product/update/'.$id)}}"
                    @else
                        action="{{url('product/create')}}"
                    @endif
                    method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="message">
                            @include('message.notification')
                        </div>
                        <div class="form-group">
                            <label for="productName">Nama Produk</label>
                            <input type="text" id="productName" name="product_name"
                            @if (isset($edit))
                                value= "{{$productEdit->product_name}}"
                            @else
                                placeholder="Masukkan Nama Produk"
                            @endif required>
                        </div>
                        <div class="form-group">
                            <label for="productPrice">Harga</label>
                            <input type="text" id="productPrice" name="product_price"
                            @if (isset($edit))
                                value= "{{$productEdit->product_price}}"
                            @else
                                placeholder="Masukkan Harga"
                            @endif required>
                        </div>
                        
                        @if (isset($edit))
                        <div class=" image">
                            <img src="{{url('ProductsImg/'.$productEdit->product_image)}}" alt="" ><br>
                        </div>
                        @endif
                        
                        <div class="form-group">
                            <label>Foto</label>
                            <input type="file" name="product_image" id="productPhoto" accept=".png, .jpg, .jpeg" @if (!isset($edit)) required  @endif>
                        </div>
                        <div class="form-group">
                            <label>Detail</label>
                            <textarea id="productDetail" name="description" required placeholder="Masukkan Deskripsi">@if (isset($edit)){{$productEdit->description}}@endif</textarea>
                        </div>
                        <div class="form-buttons">
                            <input type="submit" @if (isset($edit))
                                value="Ubah Produk"
                            @else
                                value="Buat Produk"
                            @endif>
                            @if (isset($edit))
                                <a href="{{url('user/product')}}" id="btnCancel">
                                    Batal Edit
                                </a><br>
                            @endif
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
                                <th class="hidden">#</th>
                                <th>Nama Produk</th>
                                <th class="hidden">Harga</th>
                                <th class="hidden">Detail</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td class="hidden">{{$no++}}</td>
                                    <td>{{$product->product_name}}</td>
                                    <td class="hidden">Rp. {{number_format($product->product_price, 0, ',', '.')}}</td>
                                    <td class="hidden">{{$product->description}}</td>
                                    <td class="action-buttons">
                                        <a href="{{url('product/edit/'.$product->id_product)}}" class="btn edit">Edit</a>
                                        <a href="{{url('product/delete/'.$product->id_product)}}" class="btn delete">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
        @endif

        
    </main>
    @include('footer.footer-user')
    {{-- <script src="produk.js"></script> --}}
</body>
</html>
