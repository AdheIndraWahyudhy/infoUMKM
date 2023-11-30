<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            margin-top: 10%;
            margin-left: 50%;
        }

        .quickForm h2 {
            text-align: center;
        }

        .form-group {
            margin-left: 5%;
        }

        .form-group .form-control {
            height: 43px;
            border-radius: 3px;
            border-color: #000;
        }

        .bawah {
            padding: 20px;
            text-align: center;
        }

        .bawah .btn {
            height: 43px;
            background-color: #178BD6;
            color: #fff;
            border-color: #178BD6;
            border-radius: 3px;
            margin: 20px 0;
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
    <form action="{{url('auth/login')}}" method="POST" class="quickForm">
        @csrf
        <h2>Login</h2>
        <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" class="form-control" id="username" name="username" value="{{Session::get('name')}}">
        </div>
        <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" class="form-control" id="pass" name="password">    
        </div>
        <div class="bawah">
            <input type="submit" value="Login" class="btn btn-primary btn-sm">
            <div>
                <span style="color: #A8A8A8;">Belum punya akun?</span> <a  href="{{url('/auth/register')}}">Daftar</a>
            </div>
        </div>
    </form>
</body>
</html>
