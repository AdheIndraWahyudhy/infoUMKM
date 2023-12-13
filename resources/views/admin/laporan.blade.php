<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{url('assets/css/laporan-style.css')}}">
</head>
<body>
    <!-- NAVBAR -->
    <header class="header">
        <div class="logo">
            <img src="{{url('assets/img/logo.png')}}" alt="logo InfoUMKM.com">
            <h3>INFOUMKM.COM</h3>
        </div>
        <nav class="menu">
            <ul>
                <li><a href="{{url('/admin/users')}}">Pengguna</a></li>
                <li><a href="{{url('/admin/reports')}}">Laporan</a></li>
                <li><a href="{{url('/admin/profile')}}">Profil</a></li>
                <li><a><i class="fa-solid fa-user"></i>Halo, {{$name}}</a></li>
                <li><a href="{{url('auth/logout/admin')}}">Logout <i class="fa-solid fa-right-from-bracket"></i></a></li>
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
                    <li><a href="{{url('/admin/users')}}">Pengguna</a></li>
                    <li><a href="{{url('/admin/reports')}}">Laporan</a></li>
                    <li><a href="{{url('/admin/profile')}}">Profil</a></li>
                    <li><a href="{{url('auth/logout/admin')}}">Logout</a></li>
                </ul>
            </div>
        </div>
    </header>
    </header>
    <main class="content">
        <div class="header-content">
            <h1>CARI INFO UMKM KAMU <br> HANYA DI <span style="color: #0F3555;">INFOUMKM.COM</span></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut.</p>
        </div>

    <!-- Laporan  -->
    <div class="title">
        <div class="form-header">
            <h2>Laporan</h2>
        </div>
    </div>

    <div id="laporanToko" class="laporan-toko">
        <div class="form-container">
            <table id="laporanTable">
                <thead>
                    <tr>
                        <th style="max-width: 10px">#</th>
                        <th>Nama User</th>
                        <th>Toko</th>
                        <th>Email</th>
                        <th>Total Laporan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stores as $store)
                        <tr>
                            <td style="max-width: 10px">{{$no++}}</td>
                            <td>
                                @foreach ($users as $user)
                                    @if ($user->id == $store->user_id )
                                        {{$user->name}}
                                    @endif
                                @endforeach
                            </td>
                            <td>{{$store->store_name}}</td>
                            <td>
                                @foreach ($users as $user)
                                    @if ($user->id == $store->user_id )
                                        <a href="https://mail.google.com/mail/?view=cm&to={{$user->email}}">{{$user->email}}</a>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                <a href="{{url('admin/report/'.$store->id_store)}}" 
                                    @if ($store->total_reports > 3)
                                        class="red-btn"
                                    @else
                                        class="aksi-btn"
                                    @endif 
                                    >@if (isset($store->total_reports))
                                        {{$store->total_reports}}
                                    @else
                                        0
                                    @endif Laporan
                                </a>
                            </td>
                            <td>
                                @if ($store->status == 'Tidak Bermasalah')
                                    <a href="{{url('admin/report/stop/'.$store->id_store)}}" class="warning-btn">Tahan Toko</a>
                                @else
                                <a href="{{url('admin/report/restore/'.$store->id_store)}}" class="aksi-btn">Pulihkan Toko</a>
                                @endif
                                <a href="{{url('admin/store/delete/'.$store->id_store)}}" class="red-btn">Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <i><h5>Note:</h5> Setelah melakukan penahanan, silahkan chat owner akun lewat email.</i>
        </div>
    </div>

    <script src="laporan.js"></script>
</body>
</html>
