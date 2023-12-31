<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>InforUMKM.com | Toko</title>
    <link rel="icon" href="{{url('assets/img/logo.png')}}">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{url('assets/css/store-style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/footer-style.css')}}">
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
                <li><a href="{{url('user/account')}}">Akun</a></li>
                <li><a href="{{url('user/store')}}">Toko</a></li>
                @if ($store != null)
                <li><a href="{{url('user/product')}}">Produk</a></li>
                @endif
                <li><a><i class="fa-solid fa-user"></i>Hallo, {{$user}}</a></li>
                <li><a href="{{url('auth/logout/user')}}">Keluar <i class="fa-solid fa-right-from-bracket"></i></a></li>
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
                    <li><a href="{{url('user/account')}}">Profil</a></li>
                    <li><a href="{{url('user/store')}}">Toko</a></li>
                    @if ($store != null)
                    <li><a href="{{url('user/product')}}">Produk</a></li>
                    @endif
                    <li><a href="{{url('auth/logout/user')}}">Keluar</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main class="main">
        <div class="header-content" style="background: url('{{url('assets/img/banner.png')}}')">
            <h1>CARI INFO UMKM KAMU <br> HANYA DI <span style="color: #0F3555;">INFOUMKM.COM</span></h1>
            <p> Jelajahi ragam toko dan dukung pertumbuhan bisnis lokal melalui InfoUMKM.com</p>
        </div>
        <div class="main-content">
            <h2>Toko</h2>
            @if (isset($store->status))
                @if ($store->status == 'Bermasalah')
                    <div class="form">
                        <h3><i>Hallo, {{$user}} <br> <br>Toko anda banyak mendapat laporan dari pengunjung, Kami telah mengirim alasan mengapa akun anda dibekukan. Diharapkan anda membalas Email kami jika laporan dari pihak pengunjung tidak benar beserta bukti yang memperkuat bahwa toko anda tidak bermasalah!</i></h3>
                        <br>
                        <h3><i>Jika anda tidak mengonfirmasi dalam 1 minggu, Kami anggap Laporan tersebut benar dan akun Anda akan terHapus</i></h3>    
                    </div>
                @else
                {{-- Pengecekan apakah sudah ada toko atau belum --}}
                    @if ($store != null)
                    <form action="{{url('user/store/update/')}}" method="POST" enctype="multipart/form-data" class="form">
                        @csrf
                        <label for="category_id">Kategori</label>
                        <select name="category_id" id="category_id" required>
                            <option value="">--- PILIH ---</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id_category}}" @if ($category->id_category == $store->category_id)
                                selected
                                @endif>{{$category->category_name}}</option>
                                @endforeach
                            </select><br>
                            <label for="store_name">Nama Toko:</label>
                            <input type="text" id="store_name" class="form-input" name="store_name" value="{{$store->store_name}}" required><br>

                            <label for="store_address">Alamat Toko:</label>
                            <input type="text" id="store_address" class="form-input" name="store_address"  value="{{$store->store_address}}" required><br>
                            
                            <label for="link_address">Link alamat pada google maps:</label>
                            <input type="url" id="link_address" class="form-input" name="link_address"  value="{{$store->link_address}}"><br>
                            
                            <img src="{{url('StoresImg/'.$store->store_image)}}" alt=""><br>
                            
                            <label for="store_image">Gambar Toko:</label>
                            <input type="file" id="store_address" class="input-file" name="store_image" accept="image/*"> <br>
                            
                            <label for="description">Deskripsi Toko</label>
                            <textarea name="description" id="description" cols="30" rows="10">{{$store->description}}</textarea><br>
                            
                            <input type="submit" value="Update toko" class="button">
                        </form>
                    @else
                    <h2>Daftarkan toko anda</h2>
                    <form action="{{url('user/store/create')}}" method="POST" enctype="multipart/form-data" class="form">
                        @csrf
                        <label for="category_id">Kategori</label>
                        <select name="category_id" id="category_id" required>
                            <option value="">--- PILIH ---</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id_category}}">{{$category->category_name}}</option>
                            @endforeach
                        </select><br>
                        <label for="store_name">Nama Toko:</label>
                            <input type="text" id="store_name" class="form-input" name="store_name" required><br>
                            <label for="store_address">Alamat Toko:</label>
                            <input type="text" id="store_address" class="form-input" name="store_address" required><br>
                            <label for="link_address">Link alamat pada google maps:</label>
                            <input type="url" id="link_address" class="form-input" name="link_address" ><br>
                            <label for="store_image">Gambar Toko:</label>
                            <input type="file" id="store_address" class="input-file" name="store_image" accept="image/*"required> <br>
                            <label for="description">Deskripsi Toko</label>
                            <textarea name="description" id="description" cols="30" rows="10"></textarea><br>
                            <input type="submit" value="Membuat toko" class="button">
                        </form>
                    @endif
                {{-- Akhir Pengecekan --}}
                @endif
            @else
                {{-- Pengecekan apakah sudah ada toko atau belum --}}
                @if ($store != null)
                <form action="{{url('user/store/update/')}}" method="POST" enctype="multipart/form-data" class="form">
                    @csrf
                    <label for="category_id">Kategori</label>
                    <select name="category_id" id="category_id" required>
                        <option value="">--- PILIH ---</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id_category}}" @if ($category->id_category == $store->category_id)
                            selected
                            @endif>{{$category->category_name}}</option>
                            @endforeach
                        </select><br>
                        <label for="store_name">Nama Toko:</label>
                        <input type="text" id="store_name" class="form-input" name="store_name" value="{{$store->store_name}}" required><br>

                        <label for="store_address">Alamat Toko:</label>
                        <input type="text" id="store_address" class="form-input" name="store_address"  value="{{$store->store_address}}" required><br>
                        
                        <label for="link_address">Link alamat pada google maps:</label>
                        <input type="url" id="link_address" class="form-input" name="link_address" placeholder="Opsional"  value="{{$store->link_address}}"><br>
                        
                        <img src="{{url('StoresImg/'.$store->store_image)}}" alt=""><br>
                        
                        <label for="store_image">Gambar Toko:</label>
                        <input type="file" id="store_address" class="input-file" name="store_image" accept="image/*"> <br>
                        
                        <label for="description">Deskripsi Toko</label>
                        <textarea name="description" id="description" cols="30" rows="10">{{$store->description}}</textarea><br>
                        
                        <input type="submit" value="Update toko" class="button">
                    </form>
                @else
                <h2>Daftarkan toko anda</h2>
                <form action="{{url('user/store/create')}}" method="POST" enctype="multipart/form-data" class="form">
                    @csrf
                    <label for="category_id">Kategori</label>
                    <select name="category_id" id="category_id" required>
                        <option value="">--- PILIH ---</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id_category}}">{{$category->category_name}}</option>
                        @endforeach
                    </select><br>
                    <label for="store_name">Nama Toko:</label>
                        <input type="text" id="store_name" class="form-input" name="store_name" required><br>
                        <label for="store_address">Alamat Toko:</label>
                        <input type="text" id="store_address" class="form-input" name="store_address" required><br>
                        <label for="link_address">Link alamat pada google maps:</label>
                        <input type="url" id="link_address" class="form-input" name="link_address" placeholder="Opsional" ><br>
                        <label for="store_image">Gambar Toko:</label>
                        <input type="file" id="store_address" class="input-file" name="store_image" accept="image/*"required> <br>
                        <label for="description">Deskripsi Toko</label>
                        <textarea name="description" id="description" cols="30" rows="10"></textarea><br>
                        <input type="submit" value="Membuat toko" class="button">
                    </form>
                @endif
            {{-- Akhir Pengecekan --}}
            @endif
            
        </div>
    </main>
    @include('footer.footer-user')
</body>
</html>
