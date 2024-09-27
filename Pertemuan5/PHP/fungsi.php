<?php

function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur; 
}

//Memanggil fungsi yang sudah dibuat
echo "Umur saya adalah ". hitungUmur(1988, 2023) ." tahun<br>";

perkenalan("Hamdana", "Hallo");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat Pagi";

//Memanggil lagi
perkenalan($saya);

?>