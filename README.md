# 🔧 Manajemen Data Bengkel Menggunakan Laravel + Filament

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
