# Product Information System - Mini Project PHP

Sebuah implementasi konseptual arsitektur sistem manajemen data informasi produk menggunakan PHP Native. Proyek ini merupakan bagian dari tugas **Mata Kuliah Pemrograman Web - Pertemuan 2 (PHP Fundamental & Data Structure)**.

## 🏗️ Struktur Arsitektur (Separation of Concerns)

Proyek ini memisahkan kode ke dalam tiga layer utama untuk menjaga kebersihan dan kemudahan pemeliharaan kode:

1. **Data Layer (`products.php`)**: Bertindak sebagai repositori data (sebagai pengganti database sementara). Menyimpan *multidimensional array* yang berisi detail komoditas produk.
2. **Processing Layer (`functions.php`)**: Mengisolasi seluruh logika bisnis, kalkulasi nilai aset gudang, dan fungsi penentu status stok.
3. **Presentation Layer (`index.php`)**: Merajut seluruh komponen (menggunakan `require_once`) dan merender data ke dalam antarmuka HTML dengan gaya visual modern (*Cyber Midnight & Glassmorphism*).

## ✨ Fitur

- **Modular Code**: Menggunakan `require_once` untuk modularitas tingkat tinggi.
- **Automated Calculation**: Kalkulasi total nilai aset gudang secara dinamis berdasarkan data harga dan stok.
- **Conditional Formatting**: Peringatan visual (warna merah) secara otomatis pada baris tabel untuk produk dengan stok kritis (kurang dari 3).
- **Modern UI**: Desain responsif menggunakan efek *Glassmorphism*.

## 🚀 Cara Menjalankan Proyek

Karena proyek ini menggunakan PHP, kamu memerlukan *web server* lokal untuk menjalankannya. Berikut adalah beberapa cara yang bisa digunakan:

### Opsi 1: Menggunakan XAMPP / Laragon
1. Pastikan aplikasi **XAMPP** sudah terinstall.
2. Buka XAMPP Control Panel dan jalankan modul **Apache** (klik *Start*).
3. Copy/pindahkan folder proyek ini (yang berisi 3 file PHP) ke dalam direktori `C:\xampp\htdocs\` (misal: `C:\xampp\htdocs\pemrograman-web`).
4. Buka browser dan akses URL: `http://localhost/pemrograman-web`

### Opsi 2: Menggunakan PHP Built-in Server (Via Terminal PowerShell/VS Code)
Jika kamu mengalami kendala path "php is not recognized" pada terminal Windows, kamu bisa memanggil eksekusi servernya menggunakan jalur absolut bawaan XAMPP.
1. Buka terminal (PowerShell / Terminal VS Code) dan arahkan ke folder proyek ini (misal: `C:\Coding\pemrograman web>`).
2. Jalankan perintah berikut:
   ```bash
   C:\xampp\php\php.exe -S localhost:8000
   ```
3. Buka browser dan akses URL: `http://localhost:8000`

*(Catatan: Jika Environment Variables sudah berhasil diatur di sistem Windows, kamu cukup menggunakan perintah `php -S localhost:8000`)*

## 📚 Referensi
- Modul Pembelajaran: `Materi_Ajar_PHP_Fundamental_Slides.pdf`