<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>detail toko</title>
</head>
<body>
    <img src="{{url('StoreImg/'.$store->store_image)}}" alt="" width="100px"> <br>
    <p>nama toko: {{$store->store_name}}</p><br>
    <p>Alamat toko: {{$store->store_address}}</p> <br>
    <p>deskripsi toko: {{$store->description}}</p> <br>
    <p>Rating: {{$store->rating}}</p> <br>
    <a href="{{url('store/'.$store->id_store.'/rating')}}">Beri penilaian</a>
</body>
</html>