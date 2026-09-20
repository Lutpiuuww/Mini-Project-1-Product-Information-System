# Proof of Concept: Product Information System (PHP Native)

**Pemberitahuan:** 
Repositori ini merupakan **lampiran tambahan (Proof of Concept)** dari implementasi teknis untuk tugas **Mini Project 1 - Mata Kuliah Pemrograman Web (Pertemuan 2)**. 

Sesuai instruksi modul, fokus utama penugasan adalah perancangan cetak biru (blueprint) konseptual tanpa kode (yang diserahkan secara terpisah). Namun, kode di dalam repositori ini dibuat sebagai pembuktian inisiatif bahwa arsitektur logis *Separation of Concerns* yang dirancang pada cetak biru tersebut dapat berjalan dengan baik di sistem nyata.

---

##  Struktur Arsitektur (Separation of Concerns)

Proyek ini memisahkan kode ke dalam tiga layer utama untuk menjaga kebersihan dan kemudahan pemeliharaan kode:

1. **Data Layer (`products.php`)**: Bertindak sebagai repositori data (sebagai pengganti database sementara). Menyimpan *multidimensional array* yang berisi detail komoditas produk.
2. **Processing Layer (`functions.php`)**: Mengisolasi seluruh logika bisnis, kalkulasi nilai aset gudang, dan fungsi penentu status stok.
3. **Presentation Layer (`index.php`)**: Merajut seluruh komponen (menggunakan `require_once`) dan merender data ke dalam antarmuka HTML dengan gaya visual modern (*Cyber Midnight & Glassmorphism*).

##  Fitur

- **Modular Code**: Menggunakan `require_once` untuk modularitas tingkat tinggi.
- **Automated Calculation**: Kalkulasi total nilai aset gudang secara dinamis berdasarkan data harga dan stok.
- **Conditional Formatting**: Peringatan visual (warna merah) secara otomatis pada baris tabel untuk produk dengan stok kritis (kurang dari 3).
- **Modern UI**: Desain responsif menggunakan efek *Glassmorphism*.

##  Cara Menjalankan Proyek (Lokal)

Karena proyek ini menggunakan PHP, kamu memerlukan *web server* lokal untuk menjalankannya.

### Opsi 1: Menggunakan XAMPP / Laragon
1. Pastikan aplikasi **XAMPP** sudah terinstall.
2. Buka XAMPP Control Panel dan jalankan modul **Apache** (klik *Start*).
3. Copy/pindahkan folder proyek ini ke dalam direktori `C:\xampp\htdocs\` (misal: `C:\xampp\htdocs\pemrograman-web`).
4. Buka browser dan akses URL: `http://localhost/pemrograman-web`

### Opsi 2: Menggunakan PHP Built-in Server (Via Terminal)
1. Buka terminal (PowerShell / Terminal VS Code) dan arahkan ke folder proyek ini.
2. Jalankan perintah berikut (sesuaikan lokasi instalasi PHP jika perlu):
   ```bash
   C:\xampp\php\php.exe -S localhost:8000