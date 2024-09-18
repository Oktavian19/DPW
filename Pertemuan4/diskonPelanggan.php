<?php
$hargaProduk = 120000;
$diskon = 0.2;
$hargaBayar = 0;

if ($hargaProduk > 100000) {
    $hargaBayar += $hargaProduk - ($hargaProduk * $diskon);
}

echo "Harga Produk: Rp.$hargaProduk<br>";
echo "Jumlah yang harus dibayarkan pelanggan adalah: Rp.$hargaBayar";

?>