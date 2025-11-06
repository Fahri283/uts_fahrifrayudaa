<?php
// Hitung total harga dan akumulasi grand total
    $grandtotal += $total;

    $beli[] = [
        "nama" => $nama,
        "harga" => $harga,
        "jumlah" => $kuantitas,
        "total" => $total
    ];
}