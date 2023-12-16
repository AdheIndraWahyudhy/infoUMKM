<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoUMKM.com | Profil</title>
    <link rel="icon" href="{{url('assets/img/logo.png')}}">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{url('assets/css/profil_user_baru.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/alert-style.css')}}">
    <link rel="stylesheet" href="{{url('assets/css/footer-style.css')}}">
    <style>
        .password-container {
            display: none;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="{{url('assets/img/logo.png')}}" alt="logo InfoUMKM.com">
            <h3>INFOUMKM.COM</h3>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="{{url('admin/users')}}">Pengguna</a></li>
                <li><a href="{{url('admin/')}}">Laporan</a></li>
                <li><a href="{{url('admin/profile')}}">Profil</a></li>
                <li><a><i class="fa-solid fa-user"></i>Halo, Admin</a></li>
                
                <li><a href="{{url('auth/logout/admin')}}">Keluar <i class="fa-solid fa-right-from-bracket"></i></a></li>
            </ul>
        </nav>
        <div class="main-sidebar">
            <input type="checkbox" id="check" checked   >
            <label for="check">
                <i class="fas fa-bars" id="open"></i>
            </label>
            <div class="sidebar">
                <label for="check">
                    <i class="fas fa-bars" id="btn"></i>
                </label>
                <ul>
                    <li><a href="{{url('admin/users')}}">Pengguna</a></li>
                    <li><a href="{{url('admin/')}}">Laporan</a></li>
                    <li><a href="{{url('admin/profile')}}">Profil</a></li>
                    <li><a href="{{url('auth/logout/admin')}}">Keluar</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="header-content" style="background: url('{{url('assets/img/banner.png')}}')">
            <h1>CARI INFO UMKM KAMU <br> HANYA DI <span style="color: #0F3555;">INFOUMKM.COM</span></h1>
            <p> Jelajahi ragam toko dan dukung pertumbuhan bisnis lokal melalui InfoUMKM.com</p>
        </div>
        <div class="main-content">
            <h2>Profil</h2>
            <button id="editButton" onclick="toggleEditMode()" class="button">Edit</button>
            <form id="myForm" class="form" action="{{url('admin/profile/update')}}" method="POST">
                @include('message.notification')
                @csrf
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" value="{{$data->name}}" required readonly><br>

                <label for="number_phone">Nomor Telepon:</label>
                <input type="tel" id="number_phone" name="number_phone" value="{{$data->number_phone}}" required readonly>
                

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{$data->email}}" required readonly><br>

                <div class="form-checkbox">
                    <input type="checkbox" id="includePassword" name="includePassword" onchange="togglePasswordInput()" disabled><br>
                    <label for="includePassword">Ubah Password</label>
                </div>

                <div class="password-container">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" readonly>
                </div>

                <br>

                <div id="submitButtonContainer" style="display: none">
                    <input type="submit" value="Submit" class="button">
                </div>
                <!-- <input type="submit" value="Edit" class="button" id="editButton" onclick="toggleEditMode()"> -->
                
            </form>
        </div>
    </div>
    @include('footer.footer-admin')
    <script>
        function toggleEditMode() {
            var editButton = document.getElementById('editButton');
            var formElements = document.getElementById('myForm').elements;
            var submitButtonContainer = document.getElementById('submitButtonContainer');
            var includePasswordCheckbox = document.getElementById('includePassword');

            for (var i = 0; i < formElements.length; i++) {
                formElements[i].readOnly = !formElements[i].readOnly;
            }
            
            var buttonText = editButton.innerHTML;
            editButton.innerHTML = (buttonText === 'Edit') ? 'Batal' : 'Edit';

            // Toggle the visibility of the submit button container
            submitButtonContainer.style.display = (submitButtonContainer.style.display === 'none' || submitButtonContainer.style.display === '') ? 'block' : 'none';

            // Enable/disable checkbox based on edit mode
            includePasswordCheckbox.disabled =!includePasswordCheckbox.disabled;

            // Reset password input state when exiting edit mode
            var passwordContainer = document.querySelector('.password-container');
            var passwordInput = document.getElementById('password');
            passwordContainer.style.display = 'none';
            passwordInput.required = false;
            passwordInput.value = '';

            // Reset checkbox state when exiting edit mode
            includePasswordCheckbox.checked = false;
        }



        function togglePasswordInput() {
            var passwordContainer = document.querySelector('.password-container');
            var includePasswordCheckbox = document.getElementById('includePassword');
            var passwordInput = document.getElementById('password');

            if (includePasswordCheckbox.checked) {
                passwordContainer.style.display = 'block';
                passwordInput.required = true;
            } else {
                passwordContainer.style.display = 'none';
                passwordInput.required = false;
            }
        }
    </script>

</body>
</html>
