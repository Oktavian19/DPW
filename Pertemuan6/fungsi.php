<?php
function perkenalan($nama, $salam="Assalamualaikkum") {
    echo "$salam, ";
    echo "Perkenalan, nama saya $nama<br>";
    echo "Senang berkenalan dengan Anda<br>";
}

function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}

echo "Umur saya adalah ". hitungUmur(2004, 2023) ." tahun";

echo "<br><br>";

perkenalan("Hamdana", "Hallo");

echo "<hr>";

$saya = "Oktavian Eka Ramadhan";
$ucapanSalam = "Selamat Pagi";

perkenalan($saya);
?>