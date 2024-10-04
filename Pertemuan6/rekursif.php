<?php

function tampilkanHaloDunia(){
    echo "Halo dunia! <br>";
    tampilkanHaloDunia();
}

function tampilkanAngka(int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";

    if ($indeks < $jumlah) {
        tampilkanAngka($jumlah, $indeks + 1);
    }
}

//tampilkanHaloDunia();

for ($i=1; $i <= 25 ; $i++) { 
    echo "perulangan ke-{$i} <br>";
}

echo "<br>";

tampilkanAngka(20);

?>