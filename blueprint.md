**TUGAS MINI PROJECT 1: PRODUCT INFORMATION SYSTEM (DESAIN)**

**Nama:** Muhammad Luthfi Fadil
**Program Studi:** Sistem Informasi, Universitas Malikussaleh
**Mata Kuliah:** Pemrograman Web (Pertemuan 2)

**Pendahuluan**
Dokumen ini menguraikan cetak biru (blueprint) arsitektur sistem manajemen data informasi produk. Sesuai dengan instruksi penugasan, rancangan ini berfokus pada pematangan konsep arsitektur desain secara logis melalui penerapan prinsip *Separation of Concerns* (pemisahan file berdasarkan fungsinya), tanpa melibatkan pengetikan sintaks kode. Arsitektur sistem dibagi menjadi tiga komponen utama:

**1. Data Layer (`products.php`)**
Berkas ini didesain secara khusus untuk bertindak sebagai pusat repositori data (basis data sementara). Struktur logika yang digunakan pada berkas ini adalah *multidimensional array* (array asosiatif di dalam array indeks). 
*   **Fungsi Logis:** Menyimpan kumpulan entitas komoditas produk secara terstruktur.
*   **Spesifikasi Atribut:** Setiap entitas produk di dalam array akan memiliki parameter wajib yang terdiri dari: ID, Nama, Kategori, Harga, Stok, dan Deskripsi. Pemisahan ke dalam *Data Layer* ini memastikan bahwa manipulasi antarmuka tidak akan merusak struktur data mentah.

**2. Processing Layer (`functions.php`)**
Berkas ini dirancang sebagai otak dari aplikasi yang menampung seluruh logika bisnis dan algoritma kalkulasi, sehingga benar-benar terisolasi dari tampilan.
*   **Fungsi `hitungTotalNilaiStok()`:** Sebuah modul fungsi yang bertugas menerima *input* berupa data array produk, lalu melakukan operasi matematika iteratif (mengalikan parameter Harga dan Stok pada setiap entitas) untuk menghasilkan *output* berupa estimasi total nilai aset di gudang.
*   **Logika Kondisional (Penyaring Status Stok):** Sebuah fungsi pendukung yang bertugas mengevaluasi parameter Stok pada setiap produk. Jika sistem mendeteksi nilai stok berada di bawah 3 (stok kritis), fungsi ini akan memberikan instruksi modifikasi secara visual (misalnya, memberikan penanda bahaya pada antarmuka).

**3. Presentation Layer (`index.php`)**
Berkas ini bertindak sebagai titik masuk utama (entry point) aplikasi sekaligus *User Interface* (UI). 
*   **Integrasi Komponen:** Berkas ini menggunakan instruksi `require_once` untuk memanggil dan merajut `products.php` dan `functions.php` secara ketat. Penggunaan *require* memastikan bahwa jika data atau logika gagal dimuat, sistem tidak akan menampilkan halaman kosong yang cacat.
*   **Mekanisme Rendering:** Berkas ini akan mengurai *multidimensional array* dari *Data Layer* menggunakan mekanisme perulangan `foreach`. Data yang diurai kemudian dipetakan satu per satu ke dalam struktur baris dan kolom tabel HTML secara dinamis.

**Lampiran Tambahan (Opsional)**
Sebagai bukti pemahaman konseptual yang telah diterjemahkan ke dalam implementasi teknis nyata (*Proof of Concept*), saya juga telah mengonversi cetak biru di atas menjadi baris kode fungsional yang dapat ditinjau pada repositori GitHub berikut:
`https://github.com/Lutpiuuww/Mini-Project-1-Product-Information-System.git`