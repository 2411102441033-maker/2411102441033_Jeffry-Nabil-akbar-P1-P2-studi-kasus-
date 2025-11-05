<html>
<head>
    <title>Menghitung Selisih Dua Waktu</title>
</head>
<body>
    <h1>Menghitung Selisih Dua Waktu</h1>
    <?php
        // baca jam dari waktu 1
        $jam1 = $_POST['jam1'];
        // baca menit dari waktu 1
        $menit1 = $_POST['menit1'];
        // baca detik dari waktu 1
        $detik1 = $_POST['detik1'];

        // baca jam dari waktu 2
        $jam2 = $_POST['jam2'];
        // baca menit dari waktu 2
        $menit2 = $_POST['menit2'];
        // baca detik dari waktu 2
        $detik2 = $_POST['detik2'];

        // menghitung total detik untuk waktu pertama
        $totaldetik1 = ($jam1 * 3600) + ($menit1 * 60) + $detik1;
        // menghitung total detik untuk waktu kedua
        $totaldetik2 = ($jam2 * 3600) + ($menit2 * 60) + $detik2;

        // menghitung selisih total detik dari kedua waktu
        $selisih = $totaldetik1 - $totaldetik2;

        echo "<p>Selisih dari kedua waktu adalah $selisih detik</p>";
    ?>
</body>
</html>