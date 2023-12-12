<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #passwordInput {
            display: none;
        }
    </style>
</head>
<body>
    <h2>User</h2>
    {{-- tombol logout --}}
    <a href="auth/logout/user"><b>Logout -> </b></a>

    <form id="myForm" action="{{url('user/account/update')}}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{$data->name}}" required>
    
        <br>
    
        <label for="number_phone">Number Phone:</label>
        <input type="text" id="number_phone" name="number_phone" value="{{$data->number_phone}}" required>
    
        <br>
    
        <label for="email">Email:</label>
        <input type="tel" id="email" name="email" value="{{$data->email}}" required>
    
        <br>

        <input type="checkbox" id="togglePassword" name="togglePassword" onchange="togglePasswordField()">
        <label for="togglePassword">Ubah Password</label>
    
        <br>


        <div id="passwordInput">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
        </div>
    
        <br>
        <i>Note: Mohon ingat username  dan password yang anda rubah, karena itu berlaku untuk login</i> 
        <br>
        <input type="submit" value="Submit">
    </form>
    
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