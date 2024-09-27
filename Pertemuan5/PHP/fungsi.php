<?php

function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama."<br/>";

    //Memanggil fungsi lain
    echo "Saya berusia ". hitungUmur(1988, 2023) ." tahun<br>";
    echo "Senang berkenalan dengan Anda<br/>";
}

function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur; 
}

//Memanggil fungsi yang sudah dibuat
perkenalan("Oktavian Eka");

echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat Pagi";

//Memanggil lagi
perkenalan($saya);

?>