🔧 **Manajemen Data Bengkel Menggunakan Laravel + Filament**

Aplikasi ini dirancang untuk mengelola data bengkel secara terintegrasi dan efisien menggunakan framework **Laravel 12** dan panel admin **Filament v3**. Proyek ini juga dilengkapi dengan Docker untuk memastikan environment pengembangan yang stabil dan konsisten.

---

## ✨ Fitur Utama

Sistem ini memungkinkan pengguna untuk:

- Menambahkan dan mengelola data pelanggan serta informasi kontak.
- Mencatat kendaraan pelanggan yang datang ke bengkel.
- Mengatur jenis layanan atau servis yang tersedia.
- Merekam histori servis setiap kendaraan untuk pelacakan perawatan.

---

## 📌 Modul Utama

### 1. Manajemen Pelanggan

Modul ini menyimpan data-data penting mengenai pelanggan seperti:

- Nama lengkap
- Alamat dan nomor telepon
- Riwayat kendaraan yang dimiliki

🛠 Implementasi menggunakan model `Pelanggan` dan resource `PelangganResource`.

---

### 2. Manajemen Kendaraan

Menampung informasi kendaraan yang dimiliki oleh pelanggan, seperti:

- Nomor Polisi
- Jenis dan Merek Kendaraan
- Tahun Kendaraan
- Relasi ke data pelanggan

🛠 Implementasi menggunakan model `Kendaraan` dan resource `KendaraanResource`.

---

### 3. Manajemen Layanan

Mencatat jenis layanan atau servis yang tersedia di bengkel:

- Nama Layanan
- Deskripsi
- Estimasi Harga

🛠 Model yang digunakan: `Layanan`.

---

### 4. Histori Servis

Modul ini mencatat aktivitas servis kendaraan:

- Tanggal servis
- Kendaraan yang diservis
- Jenis layanan yang diberikan
- Catatan teknisi atau hasil pemeriksaan

🛠 Menggunakan relasi antar model `HistoriServis`, `Kendaraan`, dan `Layanan`.

---

## 🔐 Keamanan Data

Sebagai bagian dari mata kuliah *Keamanan Informasi*, sistem ini memperhatikan aspek berikut:

- Struktur data yang aman menggunakan migration Laravel
- Informasi rahasia disimpan di file `.env` dan tidak dibuka ke publik
- Koneksi database terenskripsi dan aman melalui Docker
- Isolasi environment dengan Docker untuk membatasi akses dari luar
- Siap dikembangkan dengan autentikasi Laravel dan fitur RBAC (Role-Based Access Control)

---

## 📝 Laporan UAS

File `Laporan Analisis UAS Keamanan Informasi.pdf` menyajikan penjelasan teknis tentang:

- Pendahuluan
- Tujuan Proyek
- Struktur Folder Repository
- Konfigurasi Docker
- Penyesuaian Laravel `.env`
- Hasil Implementasi
- Kesimpulan

---

## ⚙️ Cara Menjalankan Proyek

```bash
# 1. Clone repository
git clone https://github.com/Shelaatyam/UAS-Keamanan-Informasi-KJ003.git
cd UAS-Keamanan-Informasi-KJ003

# 2. Salin file .env dan sesuaikan (jika perlu)
cp .env.example .env

# 3. Jalankan Docker
docker-compose up -d --build

# 4. Masuk ke container Laravel
docker-compose exec app bash

# 5. Install dependensi dan konfigurasi Laravel
composer install
php artisan key:generate
php artisan migrate --seed
exit

# 6. Jalankan Vite (opsional untuk Filament UI)
npm install
npm run dev

# 7. Akses aplikasi
# Buka browser dan kunjungi:
http://localhost:8000

UI
![WhatsApp Image 2025-07-22 at 23 34 59_1fd5ccbc](https://github.com/user-attachments/assets/8e54d22c-2836-4578-b8ba-12e420ac4cb4)
![WhatsApp Image 2025-07-22 at 23 35 00_605c5a11](https://github.com/user-attachments/assets/e5510dc9-691a-4dd5-884d-f7c4aad47437)
![WhatsApp Image 2025-07-22 at 23 34 59_9aee303f](https://github.com/user-attachments/assets/c36c24b1-c89f-4c56-9842-25e736915a10)


👤 Developer
Shela Atya Mitasya
NIM: 20210801022
🔗 GitHub Profile

📁 Repository: https://github.com/Shelaatyam/UAS-Keamanan-Informasi-KJ003

mathematica
Copy
Edit












<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
