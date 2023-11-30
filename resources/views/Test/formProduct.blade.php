<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Product</title>
</head>
<body>
    {{-- Tombol Kembali --}}
    <a href="{{url('user')}}">Kembali</a>

    {{-- Form --}}
    {{-- If Else di sini berguna untuk memasukkan nilai apabila kita menggunakan fitur edit --}}
    <form action="{{url('product/create')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product_name" 
        @if (isset($edit))
            value= "{{$product->product_name}}"
        @else
            placeholder="Masukkan Nama Produk"
        @endif
        required><br>
    
        <label for="product_price">Product Price:</label>
        <input type="number" id="product_price" name="product_price" 
        @if (isset($edit))
            value= "{{$product->product_price}}"
        @else
            placeholder="Masukkan Harga"
        @endif
        required><br>
    
        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" required>@if (isset($edit)){{$product->description}}@endif</textarea><br>

        {{-- Menampilkan gambar apabila kita menggunakan fitur edit produk --}}
        @if (isset($edit))
            <img src="{{url('ProductsImg/'.$product->product_image)}}" alt=""><br>
        @endif

        {{--  --}}
        <label for="product_image">Product Image:</label>
        <input type="file" id="product_image" name="product_image" accept="image/*" @if (!isset($edit)) required @else masukkan Deskripsi @endif><br>
    
        <input type="submit" value="Submit">
    </form>
</body>
</html>