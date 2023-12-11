<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>UMKM</title>

        <link rel="stylesheet" href="css/reset.css" />
        <link rel="stylesheet" href="css/style.css" />

        <!-- font awesome  -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/solid.min.css"
            integrity="sha512-pZlKGs7nEqF4zoG0egeK167l6yovsuL8ap30d07kA5AJUq+WysFlQ02DLXAmN3n0+H3JVz5ni8SJZnrOaYXWBA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
    </head>
    <body>
        <!-- navbar  -->
        <nav class="navbar">
            <div class="navbar-container container">
                <div class="navbar-brand">
                    <img src="img/shop.png" width="30" alt="shop.png" />
                    <h1 class="logo">INFOUMKM.COM</h1>
                </div>
                <ul class="menu-items">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Toko</a></li>
                    <li><a href="#">Product</a></li>
                </ul>
                <div class="user-items">
                    <img src="img/user-solid.svg" alt="" srcset="" />
                    <span>Aulia Agusta</span>
                </div>
            </div>
        </nav>
        <!-- navbar end -->

        <!-- hero section -->
        <div class="hero">
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
        </div>
        <!-- hero sectiond end -->

        <!-- section profile  -->
        <section class="profil">
            <div class="container">
                <h1 class="profil-title">PROFIL</h1>
                <div style="float: inline-end">
                    <a href="#" class="btn btn-done btn-edit">Simpan</a>
                    <a href="#" class="btn btn-red btn-batal">Batal</a>
                </div>
                <div class="clear"></div>
                <div class="detail-profile-wrapper">
                    <form>
                        <!-- account -->
                        <hr />
                        <div class="baris">
                            <div class="form-title">
                                <h1>Account</h1>
                            </div>
                            <div class="form-group-wrapper">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        placeholder="Admin1"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        placeholder="Auliaagusta@gmail.com"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="nomor">Nomor Handphone</label>
                                    <input
                                        type="text"
                                        id="nomor"
                                        name="nomor"
                                        placeholder="0813-xxxx-xxxx"
                                    />
                                </div>
                            </div>
                        </div>
                        <!-- UMKM -->
                        <hr />
                        <div class="baris">
                            <div class="form-title">
                                <h1>UMKM</h1>
                            </div>
                            <div class="form-group-wrapper">
                                <div class="form-group">
                                    <label for="umkm">Nama UMKM</label>
                                    <input
                                        type="text"
                                        id="umkm"
                                        name="umkm"
                                        placeholder="Toko Gusta Makmur"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input
                                        type="text"
                                        id="alamat"
                                        name="alamat"
                                        placeholder="Jl. Chandradimuka No.57"
                                    />
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea
                                        id="deskripsi"
                                        name="deskripsi"
                                        placeholder="Lorem ipsum dolor sit amet consectetur adipisicing."
                                    ></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="foto">Foto Toko</label>
                                    <input
                                        type="file"
                                        id="foto"
                                        name="foto"
                                        placeholder="Auliaagusta@gmail.com"
                                    />
                                </div>
                            </div>
                        </div>
                        <!-- produk -->
                        <hr />
                        <div class="baris">
                            <div class="form-title">
                                <h1>Produk</h1>
                            </div>
                            <div class="form-group-wrapper">
                                <div class="form-group">
                                    <label for="produk">Nama</label>
                                    <input
                                        type="text"
                                        id="produk"
                                        name="produk"
                                        placeholder="Toko Gusta Makmur"
                                    />
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input
                                        type="number"
                                        id="harga"
                                        name="harga"
                                        placeholder="Jl. Chandradimuka No.57"
                                    />
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea
                                        id="deskripsi"
                                        name="deskripsi"
                                        placeholder="Lorem ipsum dolor sit amet consectetur adipisicing."
                                    ></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="foto">Foto produk</label>
                                    <input
                                        type="file"
                                        id="foto"
                                        name="foto"
                                        placeholder="Auliaagusta@gmail.com"
                                    />
                                </div>
                                <div class="form-group tambah-produk">
                                    <a href="#" class="btn-tambah"
                                        >+ Tambah Produk</a
                                    >
                                </div>
                            </div>
                        </div>
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
    </body>
</html>
