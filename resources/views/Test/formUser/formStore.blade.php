<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store</title>
</head>
<body>
    <h2>User</h2>
    {{-- tombol logout --}}
    <a href="{{url('auth/logout/user')}}"><b>Logout -> </b></a>

    {{-- Menampilkan halaman nama user --}}
    <h1>Hallo, {{$user}}</h1>

    {{-- Pengecekan apakah sudah ada toko atau belum --}}
    @if ($store != null)
        <form action="{{url('user/store/update/')}}" method="POST" enctype="multipart/form-data">
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
            <input type="text" id="store_name" name="store_name" value="{{$store->store_name}}" required><br>

            <label for="store_address">Alamat Toko:</label>
            <input type="text" id="store_address" name="store_address"  value="{{$store->store_address}}" required><br>

            <label for="link_address">Link alamat pada google maps:</label>
            <input type="url" id="link_address" name="link_address"  value="{{$store->link_address}}"><br>

            <img src="{{url('StoresImg/'.$store->store_image)}}" alt="" height="100px"><br>

            <label for="store_image">Gambar Toko:</label>
            <input type="file" id="store_address" name="store_image" accept="image/*"> <br>

            <label for="description">Deskripsi Toko</label>
            <textarea name="description" id="description" cols="30" rows="10">{{$store->description}}</textarea><br>

            <input type="submit" value="Update toko">
        </form>
    @else
    <h2>Daftarkan toko anda</h2>
    <form action="{{url('user/store/create')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="category_id">Kategori</label>
        <select name="category_id" id="category_id" required>
            <option value="">--- PILIH ---</option>
            @foreach ($categories as $category)
                <option value="{{$category->id_category}}">{{$category->category_name}}</option>
            @endforeach
        </select><br>
        <label for="store_name">Nama Toko:</label>
        <input type="text" id="store_name" name="store_name" required><br>
        <label for="store_address">Alamat Toko:</label>
        <input type="text" id="store_address" name="store_address" required><br>
        <label for="link_address">Link alamat pada google maps:</label>
        <input type="url" id="link_address" name="link_address" ><br>
        <label for="store_image">Gambar Toko:</label>
        <input type="file" id="store_address" name="store_image" accept="image/*"required> <br>
        <label for="description">Deskripsi Toko</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Membuat toko">
    </form>
    @endif



    
</body>
</html>