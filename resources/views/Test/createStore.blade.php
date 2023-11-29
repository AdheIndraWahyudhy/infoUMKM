<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Store</title>
</head>
<body>
    <form action="{{url('store/create')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="category_id">Kategori</label>
        <select name="category_id" id="category_id" required>
            <option value="">--- PILIH ---</option>
            @foreach ($categories as $category)
                <option value="{{$category->id_category}}">{{$category->category_name}}</option>
            @endforeach
        </select>
        <label for="store_name">Nama Toko:</label>
        <input type="text" id="store_name" name="store_name" required>
        <label for="store_address">Alamat Toko:</label>
        <input type="text" id="store_address" name="store_address" required>
        <label for="store_image">Gambar Toko:</label>
        <input type="file" id="store_address" name="store_image" accept="image/*"required>
        <label for="description">Deskripsi Toko</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
        <input type="submit" value="Membuat toko">
    </form>
</body>
</html>