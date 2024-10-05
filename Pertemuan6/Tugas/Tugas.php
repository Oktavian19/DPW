<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <script src="jQuery 3.7.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#flip").click(function () {
                $("#kotak2").slideToggle("slow");
            });
        });
    </script>
</head>
<body>
    <h1>Data Siswa</h1>
    <div id="flip">Click to show database</div>
    <div id="kotak2">
    <table>
        <thead></thead>
            <tr id="table-header">
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $listSiswa = array (
            array("Andi", 15, "10A", "Malang"),
            array("Siti", 16, "10B", "Batu"),
            array("Budi", 15, "10A", "Dinoyo"),
            array("Anton", 25, "15A", "Dinoyo"),
        );

        foreach ($listSiswa as $data) {
            echo "<tr>";
            foreach ($data as $detail) {
                echo "<td>$detail</td>";
            }
            echo "</tr>";
        }

        $tot_usia = 0;
        for ($i=0; $i < count($listSiswa); $i++) { 
            $tot_usia += $listSiswa[$i][1];
        }

        $rerata = $tot_usia/count($listSiswa);
        ?>
        </tbody>
    </table>
    <h2>Rata-Rata Umur Siswa : <?php echo "$rerata";?> tahun</h2>
    </div>
</body>
</html>