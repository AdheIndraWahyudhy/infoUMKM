<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>UMKM</title>

        <link rel="stylesheet" href="{{url('assets/css/profil-reset.css')}}" />
        <link rel="stylesheet" href="{{url('assets/css/profil-style.css')}}" />
        <link rel="stylesheet" href="{{url('assets/css/alert-style.css')}}" />
        <link rel="stylesheet" href="{{url('assets/css/header-style.css')}}" />


        <!-- font awesome  -->
        
        <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    </head>
    <body>
        <!-- navbar  -->
        {{-- <nav class="navbar">
            <div class="navbar-container container">
                <div class="navbar-brand">
                    <img src="{{url('assets/img/logo.png')}}" width="30" alt="" />
                    <h1 class="logo">INFOUMKM.COM</h1>
                </div>
                <ul class="menu-items">
                    <li><a href="{{url('user/')}}">Home</a></li>
                    <li><a href="{{url('user/account')}}">Profil</a></li>
                    <li><a href="{{url('user/store')}}">Toko</a></li>
                    <li><a href="{{url('user/product')}}">Product</a></li>
                </ul>
                <div class="user-items">
                    <img src="img/user-solid.svg" alt="" srcset="" />
                    <span>Aulia Agusta</span>
                </div>
            </div>
        </nav> --}}
        <!-- navbar end -->
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
            <div class="header-content" style="background: url('{{url('assets/img/banner.png')}}')">
                <h1>CARI INFO UMKM KAMU <br> HANYA DI <span style="color: #0F3555;">INFOUMKM.COM</span></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, <br> sed do eiusmod tempor incididunt ut.</p>
            </div>
            <!-- konten seterusnya disini -->
        </main>
        <!-- hero section -->
        {{-- <div class="hero">
            <div class="container">
                <p class="hero-title">
                    CARI INFO UMKM KAMU <br />
                    HANYA DI <strong>INFOUMKM.COM</strong>
                </p>
                <p class="hero-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Suscipit, neque.
                </p>
            </div>
        </div> --}}
        <!-- hero sectiond end -->

        <!-- section profile  -->
        <section class="profil">
            <div class="container">
                <h1 class="profil-title">PROFIL</h1>
                {{-- <a
                    href="#"
                    class="btn btn-done btn-edit"
                    style="float: inline-end"
                    >Edit</a
                > --}}
                <button type="button" id="editButton" class="btn btn-done btn-edit" style="float: inline-end" onclick="toggleEdit()">Edit</button>
                <div class="clear"></div>
                <div class="form-profile-wrapper">
                    @include('message/notification')
                    <form action="{{url('user/account/update')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{$data->name}}"
                                readonly
                            />
                        </div>
                        <div class="form-group">
                            <label for="number_phone">Nomor Hp/WhatsApp</label>
                            <input
                                type="text"
                                id="number_phone"
                                name="number_phone"
                                value="{{$data->number_phone}}"
                                readonly
                            />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{$data->email}}"
                                readonly
                            />
                        </div>
                        <div class="form-toggle">
                            <input type="checkbox" id="togglePassword" name="togglePassword" onchange="togglePasswordField()">
                            <label for="togglePassword">Ubah Password</label>
                        </div>
                        <div id="passwordInput" >
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password">
                        </div>
                                            
                        <button type="submit" class="btn btn-done btn-edit" id="submitButton" style="display: none; margin-top:15px">Submit</button>
                    </form>
                </div>
            </div>
        </section>
        <!-- section profile end  -->

        <!-- section footer  -->
        <footer class="container footer">
            <p>Copy Right 2023</p>
        </footer>
        <!-- section footer end -->

        <script src="{{url('assets/js/profile-user-script.js')}}"></script> 
    </body>
</html>
