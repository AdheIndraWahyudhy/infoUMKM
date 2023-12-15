<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InfoUMKM.com</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{url('assets/css/user-admin-style.css')}}">
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
            <input type="checkbox" id="check" checked>
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
    <main class="content">
        <div class="header-content" style="background: url('{{url('assets/img/banner.png')}}')">
            <h1>CARI INFO UMKM KAMU <br> HANYA DI <span style="color: #0F3555;">INFOUMKM.COM</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut.</p>
        </div>
        <div class="main-content">
            <h2>PENGGUNA</h2>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama User</th>
                            <th class="toko">Toko</th>
                            <th class="email">Email</th>
                            <th class="action-column">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)   
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$user->name}}</td>
                                <td class="toko">
                                    @foreach ($stores as $store)
                                        @if ($store->user_id == $user->id)
                                            {{$store->store_name}}
                                        @endif
                                    @endforeach
                                </td>
                                <td class="email">{{$user->email}}</td>
                                <td class="action-column">
                                    @foreach ($stores as $store)
                                        @if ($store->user_id == $user->id)
                                            <a href="{{url('admin/user/'.$user->id)}}"><button class="lihat">Lihat Toko</button></a>
                                        @endif
                                    @endforeach
                                        <a href="{{url('admin/account/delete/'.$user->id)}}"><button class="hapus">Hapus</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>
