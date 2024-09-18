<?php
$daftarNilai = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

# Mencari rerata
$jmlNilai = 0;
foreach ($daftarNilai as $nilai) {
    $jmlNilai += $nilai[1];
}

$rerata = $jmlNilai / count($daftarNilai);

echo "Rata-rata: $rerata<br><br>";

foreach ($daftarNilai as $nilai) {
    if ($nilai[1] > $rerata) {
        echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]} <br>";
    }
}
?>