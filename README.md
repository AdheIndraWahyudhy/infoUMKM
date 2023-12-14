# infoUMKM

Website InfoUMKM.com ini merupakan sistem informasi yang menyediakan informasi UMKM dan produknya yang menjadi wadah dalam membantu promosi dan pemasaran UMKM. Website informasi mengenai lapak penjualan ini bertujuan untuk memberikan dukungan yang sangat dibutuhkan kepada pedagang kecil dan individu yang ingin sukses dalam penjualan online. Dengan adanya website InfoUMKM ini diharapkan masyarakat lebih mudah dalam menemukan berbagai produk UMKM. 

## Instalasi

Ikuti langkah-langkah di bawah ini untuk menginstal proyek ini di lingkungan pengembangan Anda.

### Persyaratan

Pastikan Anda telah memenuhi persyaratan berikut sebelum menginstal proyek:

- PHP versi >= 7.4
- Composer
- MySQL 
- Memiliki lingkungan pengembangan lokal (local development environment). Seperti XAMPP dan Laragon

### Langkah-langkah Instalasi

1. **Clone Repositori**

    Sebelum melakukan clone, buatlah folder baru, dan buka terminal yang Anda Miliki Seperti PowerShell, CMD, dan Lain-lain.
    Kemudian jalankan perintah berikut

    ```bash
    git clone https://github.com/AdheIndraWahyudhy/infoUMKM.git
    ```

2. **Pindah ke Direktori Proyek**

    ```bash
    cd nama-proyek
    ```

3. **Salin Berkas .env**

    Salin berkas `.env.example` dan ubah nama menjadi `.env`.

    Untuk menyalin file `.env.example`menjadi `.env` bisa jalankan perintah berikut dalam bash.

    ```bash
    cp .env.example .env
    ```

    Buatlah Database terlebih dahulu pada mysql, dan kemudian lakukan pengisian file `.env` pada `DB_DATABASE=` kemudian isi sesuai dengan database yang anda buat sebelumnya jangan lupa untuk mengisi `DB_USERNAME=`sesuai pada database dan `DB_PASSWORD=` jika ada passwordnya

4. **Instal Dependensi PHP dengan Composer**

    ```bash
    composer install
    ```

5. **Buat Kunci Aplikasi**

    ```bash
    php artisan key:generate
    ```

6. **Migrasi dan Isi Database**

    ```bash
    php artisan migrate
    ```

    Opsional: Jika Anda ingin mengisi database dengan data awal, jalankan perintah ini.

7. **Jalankan Server Pengembangan**

    ```bash
    php artisan serve
    ```

    Proyek Laravel Anda akan berjalan di [http://localhost:8000](http://localhost:8000).

## Kontribusi


### Designer
- [Caecario Yonim Betta Sabillah](https://www.instagram.com/caecario.ybs_/)

### Front-End Developer
- [Aulia Augusta](https://www.instagram.com/gus.ta__/)
- [Dimas Aryansyah](https://www.instagram.com/aryandinataa/)
- [Vico Pratama Fajareno](https://www.instagram.com/vico_prtma27/)

### Back-End Developer
- [Adhe Indra Wahyudhy](https://github.com/AdheIndraWahyudhy)

Jika Anda ingin berkontribusi pada proyek ini, silakan buat cabang baru dan ajukan pull request.
