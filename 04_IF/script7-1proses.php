<html>
<head>
    <title>Mencari Bilangan Terbesar dari 3 Bilangan</title>
</head>
<body>
    <h1>Mencari Bilangan Terbesar dari 3 Bilangan</h1>

<?php
$bilangan1 = $_POST['bil1']; // membaca input bilangan pertama
$bilangan2 = $_POST['bil2']; // membaca input bilangan kedua
$bilangan3 = $_POST['bil3']; // membaca input bilangan ketiga

// Cara ke - 1

if ($bilangan1 > $bilangan2) {
    $maxSementara = $bilangan1;
} else {
    $maxSementara = $bilangan2;
}

if ($bilangan3 > $maxSementara) {
    $maxAkhir = $bilangan3;
} else {
    $maxAkhir = $maxSementara;
}

echo "<p><b>Cara 1:</b> Nilai maksimum dari <b>$bilangan1</b>, <b>$bilangan2</b>, dan <b>$bilangan3</b> adalah <b>$maxAkhir</b></p>";


// Cara ke - 2

if (($bilangan1 > $bilangan2) && ($bilangan1 > $bilangan3)) {
    $maxAkhir = $bilangan1;
} elseif (($bilangan2 > $bilangan1) && ($bilangan2 > $bilangan3)) {
    $maxAkhir = $bilangan2;
} else {
    $maxAkhir = $bilangan3;
}

echo "<p><b>Cara 2:</b> Nilai maksimum dari <b>$bilangan1</b>, <b>$bilangan2</b>, dan <b>$bilangan3</b> adalah <b>$maxAkhir</b></p>";


// Cara ke - 3

if ($bilangan1 > $bilangan2) {
    if ($bilangan1 > $bilangan3) {
        $maxAkhir = $bilangan1;
    } else {
        $maxAkhir = $bilangan3;
    }
} else {
    if ($bilangan2 > $bilangan3) {
        $maxAkhir = $bilangan2;
    } else {
        $maxAkhir = $bilangan3;
    }
}

echo "<p><b>Cara 3:</b> Nilai maksimum dari <b>$bilangan1</b>, <b>$bilangan2</b>, dan <b>$bilangan3</b> adalah <b>$maxAkhir</b></p>";
?>
</body>
</html>
