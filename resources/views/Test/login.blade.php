<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="{{url('auth/login')}}" method="POST" class="quickForm">
        @csrf
        <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" class="form-control" id="username" name="username" value="{{Session::get('name')}}">
        </div>
        <div class="form-group">
            <label for="pass">Password</label>
            <input type="password" class="form-control" id="pass" name="password">    
        </div>
        <div class="bawah">
            <input type="submit" value="login" class="btn btn-primary btn-sm">
            <div>
                Belum punya akun? daftar disini <a style="color: rgb(217, 255, 0)" href="{{url('/auth/register')}}">Daftar</a>
            </div>
        </div>
    </form>
</body>
</html>
