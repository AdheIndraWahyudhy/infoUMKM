<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
</head>
<body>
    <h2>User</h2>
    {{-- tombol logout --}}
    <a href="{{url('auth/logout/user')}}"><b>Logout -> </b></a>

    {{-- Menampilkan halaman nama user --}}
    <h1>Hallo, {{$user}}</h1>

    {{-- Form edit dan tambah product --}}
    <form 
    @if (isset($edit))
        action="{{url('product/update/'.$idUser)}}"
    @else
        action="{{url('product/create')}}"
    @endif
     method="post" enctype="multipart/form-data">
        @csrf
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" 
        @if (isset($edit))
            value= "{{$productEdit->product_name}}"
        @else
            placeholder="Masukkan Nama Produk"
        @endif
        required><br>
    
        <label for="product_price">Product Price:</label>
        <input type="number" id="product_price" name="product_price" 
        @if (isset($edit))
            value= "{{$productEdit->product_price}}"
        @else
            placeholder="Masukkan Harga"
        @endif
        required><br>
    
        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required>@if (isset($edit)){{$productEdit->description}}@endif</textarea><br>

        {{-- Menampilkan gambar apabila kita menggunakan fitur edit produk --}}
        @if (isset($edit))
            <img src="{{url('ProductsImg/'.$productEdit->product_image)}}" alt="" height="100px"><br>
        @endif

        {{--  --}}
        <label for="product_image">Product Image:</label>
        <input type="file" id="product_image" name="product_image" accept="image/*" @if (!isset($edit)) required @else masukkan Deskripsi @endif><br>
    
        <input type="submit" @if (isset($edit))
            value="Ubah Produk"
        @else
            value="Buat Produk"
        @endif>
        @if (isset($edit))
            <a href="{{url('user/product')}}">
                Batal Edit
            </a><br>
        @endif
    </form>

        {{-- <img src="{{url('StoresImg/'.$store->store_image)}}" alt=""> --}}
    <h3>Table Produk</h3>
    <a href="{{url('/product')}}">Tambah Produk</a>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->product_price}}</td>
                    <td>{{$product->description}}</td>
                    <td>
                        <a href="{{url('product/edit/'.$product->id_product)}}">Edit</a>
                        <a href="{{url('product/delete/'.$product->id_product)}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
