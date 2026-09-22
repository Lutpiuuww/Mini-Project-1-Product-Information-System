<?php
// products.php
// Menyimpan data komoditas produk (ID, Nama, Kategori, Harga, Stok, Deskripsi)

$katalogProduk = [
    [
        "id" => "PRD-001",
        "nama" => "Mechanical Keyboard RGB",
        "kategori" => "Peripheral",
        "harga" => 1250000,
        "stok" => 15,
        "deskripsi" => "Keyboard mekanik dengan switch biru yang taktil."
    ],
    [
        "id" => "PRD-002",
        "nama" => "Wireless Gaming Mouse",
        "kategori" => "Peripheral",
        "harga" => 850000,
        "stok" => 2, // Contoh stok kritis (< 3)
        "deskripsi" => "Mouse nirkabel latensi rendah dengan sensor optik presisi."
    ],
    [
        "id" => "PRD-003",
        "nama" => "Monitor Ultrawide 34-inch",
        "kategori" => "Display",
        "harga" => 5500000,
        "stok" => 8,
        "deskripsi" => "Monitor lengkung resolusi 1440p untuk produktivitas."
    ],
    [
        "id" => "PRD-004",
        "nama" => "Thermal Paste Premium",
        "kategori" => "Accessories",
        "harga" => 120000,
        "stok" => 1, // Contoh stok kritis (< 3)
        "deskripsi" => "Pasta konduktif termal performa tinggi."
    ]
];
?>