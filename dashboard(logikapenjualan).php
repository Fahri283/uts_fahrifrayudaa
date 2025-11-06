<?php
// Pilih barang secara random (tanpa duplikat)
$jumlah_pembelian = rand(2, count($namaBarang));
$indexBarang = range(0, count($namaBarang) - 1); // daftar index 0 - 4
shuffle($indexBarang); // acak urutan index

for ($i = 0; $i < $jumlah_pembelian; $i++) {
    $idx = $indexBarang[$i]; // ambil index ke-i dari hasil shuffle

    $nama = $namaBarang[$idx];
    $harga = $hargaBarang[$idx];
    $kuantitas = rand(1, 3);
    $total = $harga * $kuantitas;