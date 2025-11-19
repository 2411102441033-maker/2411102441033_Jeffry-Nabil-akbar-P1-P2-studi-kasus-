<?php
echo "=== MENCARI PASANGAN (x, y, z) BILANGAN ASLI ===<br>";
echo "=== YANG MEMENUHI PERSAMAAN x + y + z = 25 ===<br><br>";

// Menghitung jumlah solusi
$jumlahPenyelesaian = 0;

// x, y, z adalah bilangan asli → minimal = 1
// Karena x + y + z = 25 → nilai maksimal untuk setiap variabel adalah 23
// (Jika lebih dari 23, maka sisa nilai tidak cukup untuk dua variabel lain)

for ($x = 1; $x <= 23; $x++) {

    for ($y = 1; $y <= 23; $y++) {

        for ($z = 1; $z <= 23; $z++) {

            // Memeriksa apakah memenuhi persamaan
            if ($x + $y + $z == 25) {

                // Menampilkan pasangan yang valid
                echo "x = $x, y = $y, z = $z<br>";

                // Menambah jumlah penyelesaian
                $jumlahPenyelesaian++;
            }
        }
    }
}

// Menampilkan total jumlah penyelesaian
echo "<br><b>Jumlah penyelesaian: $jumlahPenyelesaian</b>";
?>
