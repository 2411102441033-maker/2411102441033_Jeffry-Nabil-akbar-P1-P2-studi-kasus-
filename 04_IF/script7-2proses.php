<html>
<head>
    <title>Mencari Status Bilangan</title>
</head>
<body>
    <h1>Mencari Status Bilangan</h1>
<?php
$bilangan = $_POST['bil'];

// Cara ke - 1
if ($bilangan > 0) {
    echo "<p>Bilangan <b>" . $bilangan . "</b> adalah positif</p>";
} else {
    if ($bilangan < 0) {
        echo "<p>Bilangan <b>" . $bilangan . "</b> adalah negatif</p>";
    } else {
        echo "<p>Bilangan <b>" . $bilangan . "</b> adalah nol</p>";
    }
}

// Cara ke - 2
if ($bilangan > 0) {
    $status = "positif";
} elseif ($bilangan < 0) {
    $status = "negatif";
} else {
    $status = "nol";
}

echo "<p>Bilangan <b>" . $bilangan . "</b> adalah bilangan <b>" . $status . "</b></p>";
?>
</body>
</html>
