<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lingkaran</title>
</head>
<body>
    <h2>LUAS DAN KELILING Lingkaran</h2><br>
    <FORM ACTION="" METHOD="POST">
    Masukkan Jari-Jari : <input type = "text" name = "jari"><br>
    <input type="submit" name="Input" value="Input"><br>
    </form>
</body>
</html>

<?php
if (isset($_POST['Input'])) {
    $j = $_POST['jari'];

    $luas = 3.14 * $j *$j;
    $kel = 2 * 3.14 * $j;

    echo "Luas Lingkaran = $luas <br>";
    echo "Keliling Lingkaran = $kel";
}
?>