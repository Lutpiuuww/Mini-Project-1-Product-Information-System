<?php
// index.php
// Merajut komponen modular dan merender HTML UI

require_once 'products.php';
require_once 'functions.php';

// Melakukan kalkulasi menggunakan fungsi dari functions.php dan data dari products.php
$totalAsetGudang = hitungTotalNilaiStok($katalogProduk);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information System</title>
    <style>
        /* Modern Emerald Dark Theme */
        body {
            background-color: #080f0c;
            color: #d1d5db;
            font-family: 'Segoe UI', system-ui, sans-serif;
            margin: 0;
            padding: 3rem;
            display: flex;
            justify-content: center;
        }
        .container {
            background: #111c18;
            border: 1px solid #1d3329;
            border-radius: 16px;
            padding: 2.5rem;
            width: 100%;
            max-width: 1000px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), 0 0 20px rgba(16, 185, 129, 0.05);
        }
        h1 {
            color: #10b981; /* Vibrant Emerald */
            margin-top: 0;
            font-size: 1.8rem;
            border-bottom: 2px solid #1d3329;
            padding-bottom: 1rem;
            margin-bottom: 1.5rem;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }
        th, td {
            padding: 1rem 1.2rem;
            text-align: left;
            border-bottom: 1px solid #1d3329;
        }
        th {
            background-color: rgba(16, 185, 129, 0.08);
            color: #34d399;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.8rem;
            letter-spacing: 1px;
        }
        /* Implementasi penyaringan warna dari logika conditional */
        .stok-kritis {
            background-color: rgba(239, 68, 68, 0.1);
            color: #f87171;
        }
        .stok-kritis td {
            border-bottom-color: rgba(239, 68, 68, 0.2);
        }
        .stok-aman {
            background-color: transparent;
            transition: background-color 0.2s ease;
        }
        .stok-aman:hover {
            background-color: rgba(16, 185, 129, 0.05);
        }
        .summary-panel {
            margin-top: 2rem;
            padding: 1.2rem 1.5rem;
            background: linear-gradient(90deg, rgba(16, 185, 129, 0.1) 0%, rgba(16, 185, 129, 0.02) 100%);
            border-left: 4px solid #10b981;
            border-radius: 6px;
            font-size: 1.1rem;
            color: #e5e7eb;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .summary-panel strong {
            color: #10b981;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Product Information System</h1>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($katalogProduk as $produk): ?>
                    <tr class="<?= penentuStatusStok($produk['stok']) ?>">
                        <td><?= $produk['id'] ?></td>
                        <td><?= $produk['nama'] ?></td>
                        <td><?= $produk['kategori'] ?></td>
                        <td>Rp <?= number_format($produk['harga'], 0, ',', '.') ?></td>
                        <td><strong><?= $produk['stok'] ?></strong></td>
                        <td><?= $produk['deskripsi'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="summary-panel">
            <span>Total Estimasi Nilai Aset Gudang:</span> 
            <strong>Rp <?= number_format($totalAsetGudang, 0, ',', '.') ?></strong>
        </div>
    </div>

</body>
</html>