<html>
<head>
    <title>Menghitung Komisi Salesman</title>
</head>
<body>
    <h1>Menghitung Komisi Salesman</h1>
    <?php
        // membaca nilai penjualan
        $nilaiJual = $_POST['penjualan'];
        // membaca nilai prosentase komisi
        $prosenKomisi = $_POST['komisi'];
        // hitung komisi berdasarkan prosen komisi
        $komisi = $nilaiJual * $prosenKomisi / 100;

        // menampilkan nilai penjualan salesman
        echo "<p>Nilai penjualan salesman : Rp. $nilaiJual </p>";
        // menampilkan nilai prosentase komisi salesman
        echo "<p>Prosentase Komisi : $prosenKomisi %</p>";
        // menampilkan hasil perhitungan komisi
        echo "<p>Komisi yang didapat salesman adalah Rp. $komisi </p>";
    ?>
</body>
</html>