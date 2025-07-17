# GO WIZ - Toko Sepeda Online

Aplikasi web e-commerce untuk toko sepeda GO WIZ yang dibangun menggunakan Laravel dan Tailwind CSS. Aplikasi ini memungkinkan pengguna untuk melihat produk sepeda, melakukan pemesanan kustom sepeda, dan administrator untuk mengelola produk dan pesanan.

## Fitur Utama

### Untuk Pengguna Umum
- **Katalog Produk**: Melihat daftar semua produk sepeda yang tersedia
- **Detail Produk**: Melihat informasi detail tentang produk tertentu
- **Custom Bike**: Melakukan pemesanan sepeda kustom sesuai kebutuhan
- **Autentikasi**: Register, login, dan manajemen profil pengguna

### Untuk Admin
- **Manajemen Produk**: CRUD operasi untuk mengelola produk sepeda
- **Manajemen Custom Bike**: Melihat dan mengupdate status pesanan custom bike
- **Panel Admin**: Dashboard khusus untuk administrator

## Teknologi yang Digunakan

- **Backend**:
  - PHP 8.1+
  - Laravel 10.x
  - MySQL Database
- **Frontend**:
  - Tailwind CSS
  - JavaScript
  - Blade Template Engine
- **Authentication**:
  - Laravel Authentication System (custom)

## Persyaratan Sistem

- PHP 8.1 atau lebih tinggi
- Composer
- Node.js dan NPM
- MySQL atau MariaDB
- Web Server (Apache/Nginx)

## Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/ardianwisnuhandika/wisnularavel.git
   cd wisnularavel
   ```

2. **Install Dependensi PHP**
   ```bash
   composer install
   ```

3. **Install Dependensi JavaScript**
   ```bash
   npm install
   ```

4. **Setup Konfigurasi**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Konfigurasi Database**
   - Edit file `.env` dan sesuaikan konfigurasi database:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=wisnularavel
     DB_USERNAME=root
     DB_PASSWORD=
     ```

6. **Migrasi dan Seeding Database**
   ```bash
   php artisan migrate --seed
   ```

7. **Buat Storage Link**
   ```bash
   php artisan storage:link
   ```

8. **Kompilasi Asset**
   ```bash
   npm run dev
   ```

9. **Jalankan Aplikasi**
   ```bash
   php artisan serve
   ```
   Aplikasi akan berjalan di `http://localhost:8000`

## Struktur Database

Aplikasi ini menggunakan beberapa tabel utama:
- **users**: Menyimpan data pengguna dengan role admin/user
- **products**: Katalog produk sepeda 
- **custom_bikes**: Menyimpan pesanan kustomisasi sepeda
- **teams**: Informasi tim GO WIZ
- **orders**: Menyimpan data pesanan produk (belum diimplementasikan)

## Alur Aplikasi

1. Pengunjung dapat melihat produk tanpa login
2. Pengguna dapat melakukan pesanan custom bike 
3. Admin dapat mengelola produk dan melihat/mengupdate status pesanan custom bike
4. Sistem autentikasi mengontrol akses ke fitur berdasarkan role pengguna

## Struktur Folder Proyek
Proyek menggunakan struktur folder standar Laravel dengan beberapa penambahan:
GO-WIZ/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── AuthController.php
│   │   │   ├── ProductController.php
│   │   │   ├── CustomBikeController.php
│   │   │   └── ProfileController.php
│   │   └── Middleware/
│   │       └── IsAdmin.php
│   ├── Models/
│   │   ├── User.php
│   │   ├── Product.php
│   │   └── CustomBike.php
├── resources/
│   └── views/
│       ├── auth/
│       │   ├── login.blade.php
│       │   └── register.blade.php
│       ├── admin/
│       │   └── products/
│       │       ├── index.blade.php
│       │       ├── create.blade.php
│       │       ├── edit.blade.php
│       │       └── show.blade.php
│       ├── layouts/
│       │   ├── app.blade.php
│       │   ├── header.blade.php
│       │   └── footer.blade.php
│       └── profile/
│           ├── show.blade.php
│           └── edit.blade.php
└── routes/
    └── web.php

## Screenshoot Aplikasi
Catatan: Sertakan screenshot aplikasi di sini setelah menyimpan file laporan, termasuk:
Form Login
•	Halaman login dengan form email dan password
 <img width="402" height="226" alt="image" src="https://github.com/user-attachments/assets/bb66e6c4-a126-4364-b305-7dac27d8fa30" />

•	Validasi client-side dan server-side
•	Link ke halaman register
Dashboard Admin
 <img width="446" height="251" alt="image" src="https://github.com/user-attachments/assets/e077b37f-70aa-4a64-8f32-a5fbc0a1e004" />

•	Tampilan dashboard dengan menu navigasi
•	Statistik produk dan pemesanan
•	Akses ke manajemen produk dan custom bike
Form Tambah Produk
 <img width="454" height="255" alt="image" src="https://github.com/user-attachments/assets/d0946dfa-d4ce-452c-b86c-060f31c7eaa4" />

•	Form input lengkap untuk produk baru
•	Upload gambar dengan preview
•	Validasi real-time
Daftar Produk
 <img width="465" height="261" alt="image" src="https://github.com/user-attachments/assets/6a5cf6be-01ab-4a71-a75a-7c6f2e6d7c6f" />

•	Tabel data produk dengan pagination
•	Fitur pencarian dan filter
•	Tombol aksi (Edit, Delete, View)
Form Edit Produk
  <img width="471" height="265" alt="image" src="https://github.com/user-attachments/assets/11d48bcb-e93c-43dd-ad40-d339d8180fb4" />
<img width="480" height="270" alt="image" src="https://github.com/user-attachments/assets/45c8201e-37dd-4515-b9da-0a468e87d76f" />

•	Form edit dengan data pre-filled
•	Validasi dan update gambar
•	Konfirmasi perubahan
Delete Produk
 <img width="478" height="269" alt="image" src="https://github.com/user-attachments/assets/7f17b353-812d-449a-a05f-169cb2d2bba7" />

•	Modal konfirmasi penghapusan
•	Pesan sukses/error setelah aksi
•	Refresh otomatis daftar produk
Halaman Custom Bike
  <img width="482" height="271" alt="image" src="https://github.com/user-attachments/assets/827a4e8b-60e8-4e24-805f-03de95dea273" />
<img width="480" height="270" alt="image" src="https://github.com/user-attachments/assets/e1d9e4c2-c0c6-40a6-944f-ab41fffe2dfc" />

•	Daftar pemesanan sepeda kustom
•	Status pemesanan (Pending, Proses, Selesai)
•	Update status oleh admin


## Kontributor

- Wisnu Handika - Developer

## Lisensi

Hak Cipta © 2023-2025 GO WIZ Bicycle Shop
