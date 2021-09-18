<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Persegi Panjang</title>
</head>
<body>
    <h2>LUAS DAN KELILING PERSEGI PANJANG</h2><br>
    <FORM ACTION="" METHOD="POST">
    Masukkan Panjang : <input type = "text" name = "panjang"><br>
    Masukkan Lebar : <input type = "text" name = "lebar"><br>
    <input type="submit" name="Input" value="Input"><br>
    </form>
</body>
</html>

<?php
if (isset($_POST['Input'])) {
    $p = $_POST['panjang'];
    $l = $_POST['lebar'];

    $luas = $p * $l;
    $kel = 2 * $p * $l;

    echo "Luas Persegi Panjang = $luas <br>";
    echo "Keliling Persegi Panjang = $kel";
}
?>