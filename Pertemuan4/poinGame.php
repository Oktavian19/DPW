<?php
$poin = 501;

$hadiahTambah = $poin > 500 ? true : false;

echo "Total skor pemain adalah: $poin<br>";
echo "Apakah pemain mendapatkan hadiah tambahan?<br>";
if ($hadiahTambah) {
    echo "YA";
} else {
    echo "TIDAK";
}
?>