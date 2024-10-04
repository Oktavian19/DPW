<?php
function perkenalan($nama, $salam="Assalamualaikkum") {
    echo "$salam, ";
    echo "Perkenalan, nama saya $nama<br>";
    echo "Senang berkenalan dengan Anda<br>";
}

perkenalan("Hamdana", "Hallo");

echo "<hr>";

$saya = "Oktavian Eka Ramadhan";
$ucapanSalam = "Selamat Pagi";

perkenalan($saya);
?>