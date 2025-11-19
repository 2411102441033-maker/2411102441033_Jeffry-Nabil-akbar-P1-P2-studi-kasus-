<?php
echo "<h2>Solusi Persamaan: x + y + z = 25</h2>";

$jumlah_penyelesaian = 0; // Inisialisasi counter

// Batas Maksimum: 23 (karena x, y, dan z minimal 1. 25 - 1 - 1 = 23)
$maksimum = 23;

// Loop 1: Variabel x (1 hingga 23)
for ($x = 1; $x <= $maksimum; $x++) {
    
    // Batas Maksimum untuk y: 25 - x - 1 (sisakan minimal 1 untuk z)
    $maks_y = 25 - $x - 1;

    // Loop 2: Variabel y
    for ($y = 1; $y <= $maks_y; $y++) {
        
        // Loop 3/Perhitungan: Variabel z
        // z secara otomatis adalah bilangan asli >= 1 karena batasan y.
        $z = 25 - $x - $y;

        // Cek kondisi final (z harus bilangan asli) - ini sebenarnya sudah terjamin oleh maks_y
        if ($z >= 1) {
            // Tampilkan pasangan solusi
            echo "x = $x, y = $y, z = $z <br />";
            
            // Tambahkan ke counter
            $jumlah_penyelesaian++;
        }
    }
}

echo "<hr>";
echo "<h3>Jumlah Penyelesaian: $jumlah_penyelesaian</h3>";
// Jawaban yang benar adalah 276
?>