#  Product Information System (PHP Native)

Sebuah implementasi web berbasis **PHP Native** untuk memanajemen data informasi produk. Proyek ini dikembangkan sebagai pemenuhan tugas **Mini Project 1 - Mata Kuliah Pemrograman Web (Pertemuan 2)**. 

Fokus utama dari proyek ini adalah implementasi **Separation of Concerns**, yaitu memisahkan alur kode menjadi tiga layer logis: Data, Processing, dan Presentation, dipadukan dengan desain antarmuka *Modern Emerald Dark* yang elegan.

##  Arsitektur Sistem

Proyek ini dibangun tanpa *framework*, memanfaatkan fitur bawaan PHP secara maksimal melalui tiga berkas inti:

1.  **`products.php` (Data Layer):** Repositori data utama berbentuk *multidimensional array* yang menampung spesifikasi produk (ID, Nama, Harga, Stok, dll).
2.  **`functions.php` (Processing Layer):** Mengisolasi seluruh *business logic*. Menangani kalkulasi matematis total valuasi aset gudang dan filter kondisional untuk mendeteksi stok kritis.
3.  **`index.php` (Presentation Layer):** Titik masuk aplikasi yang merajut semua layer menggunakan `require_once`. Data dirender ke dalam struktur tabel HTML dinamis menggunakan `foreach`.

##  Fitur Unggulan

- **Strict Modularity:** Penggunaan `require_once` untuk memastikan dependensi data dan logika dimuat dengan sempurna sebelum *rendering* UI.
- **Automated Valuation:** Perhitungan nilai total aset gudang dilakukan secara otomatis (*real-time processing*).
- **Smart Conditional Formatting:** Baris produk pada tabel akan otomatis di-*highlight* dengan warna peringatan (merah pastel) jika stok berada di angka kritis (< 3).
- **Modern Emerald Dark UI:** Desain antarmuka responsif yang mengusung gaya visual *dark theme* dengan latar belakang gelap pekat, dipadukan aksen *emerald green* bergradasi untuk memberikan kontras tinggi yang profesional dan tidak membosankan.

##  Panduan Eksekusi Lokal

Aplikasi ini dapat dijalankan dengan mudah menggunakan *web server* lokal (Apache) atau *built-in server* PHP.

**Opsi 1: Menggunakan Terminal (PHP Built-in Server)**
1. Kloning repositori ini atau *download* sebagai ZIP.
2. Buka terminal (VS Code / PowerShell) dan arahkan ke direktori proyek.
3. Jalankan perintah eksekusi server:
   ```bash
   php -S localhost:8000