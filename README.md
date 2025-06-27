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

## Kontributor

- Wisnu Handika - Developer

## Lisensi

Hak Cipta © 2023-2025 GO WIZ Bicycle Shop
