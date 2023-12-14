<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./profil-user.css">
    <style>
        #passwordInput {
            display: none;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="./img/logo.png" alt="logo InfoUMKM.com">
            <h3>INFOUMKM.COM</h3>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="">UMKM</a></li>
                <li><a href="">Akun</a></li>
                <li><a>Toko</a></li>
                @if ($store != null)
                <li><a href="">Produk</a></li>
                @endif
                <li><a><i class="fa-solid fa-user"></i>Halo, Aulia</a></li>
                <li><a href="{{url('auth/logout/user')}}"><i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </nav>
        <div class="main-sidebar">
            <input type="checkbox" id="check">
            <label for="check">
                <i class="fas fa-bars" id="open"></i>
            </label>
            <div class="sidebar">
                <label for="check">
                    <i class="fas fa-bars" id="btn"></i>
                </label>
                <ul>
                    <li><a href="">UMKM</a></li>
                    <li><a href="">Akun</a></li>
                    <li><a href="">Toko</a></li>
                    @if ($store != null)
                    <li><a href="">Produk</a></li>
                    @endif
                    <li><a href="{{url('auth/logout/user')}}">Keluar</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main class="content">
        <div class="header-content">
            <h1>CARI INFO UMKM KAMU <br> HANYA DI <span style="color: #0F3555;">INFOUMKM.COM</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut.</p>
        </div>
        <div class="main-content">
            <h2>User</h2>
    <!-- {{-- tombol logout --}} -->
            <form id="myForm" action="{{url('user/account/update')}}" method="POST" class="form">
                <!-- @csrf -->
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{$data->name}}" required>
            
                <br>
            
                <label for="number_phone">Number Phone:</label>
                <input type="text" id="number_phone" name="number_phone" value="{{$data->number_phone}}" required>
            
                <br>
            
                <label for="email">Email:</label>
                <input type="tel" id="email" name="email" value="{{$data->email}}" required>
            
                <br>

                <input type="checkbox" id="togglePassword" name="togglePassword" onchange="togglePasswordField()" class="chek">
                <label for="togglePassword">Ubah Password</label>
            
                <br>


                <div id="passwordInput">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                </div>
            
                <br>
                <i>Note: Mohon ingat username  dan password yang anda rubah, karena itu berlaku untuk login</i> 
                <br>
                <input type="submit" value="Submit" class="button">
            </form>
        </div>
    </main>
    
    <script>
        function togglePasswordField() {
            var passwordInput = document.getElementById("passwordInput");
    
            if (document.getElementById("togglePassword").checked) {
                // Jika checkbox diaktifkan, tampilkan input password
                passwordInput.style.display = "block";
            } else {
                // Jika checkbox dinonaktifkan, sembunyikan input password
                passwordInput.style.display = "none";
            }
        }
    </script>    
</body>
</html>
