<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Saldo Bank</title>
</head>
<body>

<h2>Form Perhitungan Saldo Bank</h2>

<form method="POST">
    <label>Saldo Awal (min Rp 1.000.000):</label><br>
    <input type="number" name="saldo_awal" required><br><br>

    <label>Jumlah Bulan (N):</label><br>
    <input type="number" name="bulan" required><br><br>

    <button type="submit" name="hitung">Hitung Saldo</button>
</form>

<hr>

<?php
if (isset($_POST['hitung'])) {

    // Input dari form
    $saldo = $_POST['saldo_awal'];
    $n = $_POST['bulan'];

    // Konstanta
    $biayaAdmin = 9000;

    echo "<h3>Hasil Perhitungan Saldo</h3>";

    // Validasi saldo awal
    if ($saldo < 1000000) {
        echo "Error: Saldo awal minimal Rp 1.000.000";
        exit;
    }

    // Perhitungan per bulan
    for ($bulan = 1; $bulan <= $n; $bulan++) {

        // Tentukan bunga
        if ($saldo >= 1100000) {
            $bunga = 0.04;   // 4% p.a
            $persen = "4%";
        } else {
            $bunga = 0.03;   // 3% p.a
            $persen = "3%";
        }

        // Bunga bulanan
        $bungaBulanan = $saldo * ($bunga / 12);

        // Hitung saldo akhir bulan
        $saldo = $saldo + $bungaBulanan - $biayaAdmin;

        echo "Bulan $bulan: Saldo = Rp " . number_format($saldo, 0, ',', '.') . 
             " (Bunga $persen)<br>";
    }

    echo "<br><b>Saldo akhir setelah $n bulan: Rp " . number_format($saldo, 0, ',', '.') . "</b>";
}
?>

</body>
</html>
