<html>
<head>
    <title>Menampilkan Nama Bulan Sekarang</title>
</head>
<body>
    <h1>Menampilkan Nama Bulan Sekarang</h1>

<?php
$angkaBln = date("n"); // Mengambil angka bulan (1–12)

switch($angkaBln) {
    case 1:
        $namaBln = "Januari";
        break;
    case 2:
        $namaBln = "Februari";
        break;
    case 3:
        $namaBln = "Maret";
        break;
    case 4:
        $namaBln = "April";
        break;
    case 5:
        $namaBln = "Mei";
        break;
    case 6:
        $namaBln = "Juni";
        break;
    case 7:
        $namaBln = "Juli";
        break;
    case 8:
        $namaBln = "Agustus";
        break;
    case 9:
        $namaBln = "September";
        break;
    case 10:
        $namaBln = "Oktober";
        break;
    case 11:
        $namaBln = "November";
        break;
    case 12:
        $namaBln = "Desember";
        break;
    default:
        $namaBln = "Bulan tidak diketahui";
        break;
}

echo "<p>Nama bulan sekarang adalah : <b>" . $namaBln . "</b></p>";
?>
</body>
</html>
