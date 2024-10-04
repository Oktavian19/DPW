<?php
function perkenalan($nama, $salam) {
    echo "$salam, ";
    echo "Perkenalan, nama saya $nama<br>";
    echo "Senang berkenalan dengan Anda<br>";
}

perkenalan("Hamdana", "Hallo");

$saya = "Oktavian Eka Ramadhan";
$ucapanSalam = "Selamat Pagi";

perkenalan($saya, $ucapanSalam);
?>