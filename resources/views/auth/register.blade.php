<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
            background: linear-gradient(93deg, #1B81D7 16.71%, #05B7D0 98.22%);
            max-width: 100%;
            margin: 0 auto;
        }

        /* Header Styles */
        .header {
            display: flex;
            flex: 1;
            align-items: center;
            color: #fff;
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

        .quickForm {
            margin-top: 100px;
            background-color: #fff;
            width: 40%;
            padding: 40px 15px;
            border-radius: 10px;
            font-size: 15px;
            display: grid;
            grid-template-columns: repeat(1, 90%);
            margin-top: 7%;
            margin-left: 50%;
        }

        .quickForm h2, input, label, .btn, p {
            margin-left: 5%;
        }

        .quickForm h2 {
            text-align: center;
        }

        .quickForm input {
            height: 43px;
            border-radius: 3px;
            border-color: #000;
        }

        .quickForm .btn {
            background-color: #178BD6;
            color: #fff;
            border-color: #178BD6;
            margin: 15px 5%;
        }

        .quickForm p {
            text-align: center;
        }

        .quickForm p a {
            color: #087292;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="./img/logo.png" alt="logo InfoUMKM.com">
            <h3>INFOUMKM.COM</h3>
        </div>
    </header>
    <form action="" method="POST" class="quickForm">
        @csrf
        <h2>Register</h2>
        <label for="name">User Name</label>
        <input type="text" id="name" name="name" class="form-control" value="{{Session::get('name')}}">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{Session::get('email')}}">
        <label for="password">Password</label>
        <input type="text" id="password" name="password" class="form-control" >
        <label for="number_phone">No HP</label>
        <input type="text" name="number_phone" id="number_phone" class="form-control" value="{{Session::get('number_phone')}}">
        <input type="submit" value="Daftar" class="btn btn-success">
        <p><span style="color: #A8A8A8;">Sudah punya akun?</span><a href="{{url('/auth')}}">Login</a></p>
    </form>
    
</body>
</html>
