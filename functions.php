<?php
// functions.php
// Berisi fungsi kalkulasi dan logika kondisional

/**
 * Mengalkulasi total nilai aset gudang dari seluruh produk
 * Rumus: Total dari (Harga x Stok) setiap entitas produk
 */
function hitungTotalNilaiStok($dataProduk) {
    $totalNilai = 0;
    foreach ($dataProduk as $item) {
        $totalNilai += ($item["harga"] * $item["stok"]);
    }
    return $totalNilai;
}

/**
 * Logika conditional untuk menyaring warna baris tabel
 * Mengembalikan nama class CSS spesifik jika stok < 3
 */
function penentuStatusStok($stok) {
    if ($stok < 3) {
        return "stok-kritis"; // Class CSS untuk indikator bahaya
    }
    return "stok-aman";
}
?>