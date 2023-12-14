<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Contoh</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./user-baru.css">
    <style>
        .password-container {
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
                <li><a href="">Pengguna</a></li>
                <li><a href="">Laporan</a></li>
                <li><a href="">Profil</a></li>
                <li><a><i class="fa-solid fa-user"></i>Halo, Admin</a></li>
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
                    <li><a href="">Pengguna</a></li>
                    <li><a href="">Laporan</a></li>
                    <li><a href="">Profil</a></li>
                    <li>Keluar</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="content">
        <div class="header-content">
            <h1>CARI INFO UMKM KAMU <br> HANYA DI <span style="color: #0F3555;">INFOUMKM.COM</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut.</p>
        </div>
        <div class="main-content">
            <form id="myForm" class="form">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required readonly><br>

                <label for="number_phone">Nomor Telepon:</label>
                <input type="tel" id="number_phone" name="number_phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required readonly>
                <small>Format: 123-456-7890</small><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required readonly><br>

                <label for="includePassword">Sertakan Password:</label>
                <input type="checkbox" id="includePassword" name="includePassword" onchange="togglePasswordInput()" disabled><br>

                <div class="password-container">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" readonly>
                </div>

                <br>

                <div id="submitButtonContainer" style="display: none">
                    <input type="submit" value="Submit" class="button">
                </div>
                <!-- <input type="submit" value="Edit" class="button" id="editButton" onclick="toggleEditMode()"> -->
                <button id="editButton" onclick="toggleEditMode()" class="button">Edit</button>
            </form>
        </div>
    </div>
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
