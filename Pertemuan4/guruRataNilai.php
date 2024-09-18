<?php
$daftarNilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

# Sorting Daftar Nilai
for ($i=0; $i < count($daftarNilai); $i++) { 
    for ($j=1; $j < count($daftarNilai) - $i; $j++) { 
        if ($daftarNilai[$j - 1] > $daftarNilai[$j]) {
            $temp = $daftarNilai[$j - 1];
            $daftarNilai[$j - 1] = $daftarNilai[$j];
            $daftarNilai[$j] = $temp;
        }
    }
}

# Jumlah tanpa 2 tertinggi dan 2 terendah
echo "Daftar Nilai tanpa 2 tertinggi dan 2 terendah: ";

$jumlahNilai = 0;
for ($i=2; $i < count($daftarNilai) - 2; $i++) { 
    $jumlahNilai += $daftarNilai[$i];
    echo "$daftarNilai[$i], ";
}

echo "<br>Jumlah nilai siswa: $jumlahNilai <br>";

# Menghitung Rata-Rata
$rerata = $jumlahNilai / (count($daftarNilai) - 4);
# Dikurangi 4 karna daftar nilai tidak memuat 2 tertinggi dan 2 terendah

echo "Rata-rata siswa: $rerata"

?>