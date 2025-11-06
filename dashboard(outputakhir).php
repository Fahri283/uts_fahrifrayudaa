<?php
echo "<h3>Detail Pembelian</h3>";
foreach ($beli as $item) {
    echo "Nama Barang : {$item['nama']} <br>";
    echo "Harga Barang: Rp. " . number_format($item['harga'], 0, ',', '.') . " <br>";
    echo "Jumlah Beli : {$item['jumlah']} <br>";
    echo "Total Harga : Rp. " . number_format($item['total'], 0, ',', '.') . " <br><br>";
}

// Tampilkan Grand Total
echo "<h3>Grand Total: Rp. " . number_format($grandtotal, 0, ',', '.') . "</h3>";
?>