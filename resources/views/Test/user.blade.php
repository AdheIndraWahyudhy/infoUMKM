<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <h2>User</h2>
    {{-- tombol logout --}}
    <a href="auth/logout/user"><b>Logout -> </b></a>

    {{-- Menampilkan halaman nama user --}}
    <h1>Hallo, {{$user}}</h1>

    {{-- percabangan, apabila user belum mempunyai toko maka user akan di arahkan untuk membuat toko baru --}}
    @if ($store != null)
        <h1>Anda sudah memiliki toko</h1>
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
    @else
        {{-- Tombol untuk membuat toko baru --}}
        Buat toko anda <a href="{{url('/store')}}">Sekarang</a>
    @endif
</body>
</html>
