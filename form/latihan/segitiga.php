<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Segitiga</title>
</head>
<body>
    <h2>LUAS DAN KELILING SEGITGA</h2><br>
    <FORM ACTION="" METHOD="POST">
    Masukkan Alas : <input type = "text" name = "alas"><br>
    Masukkan Tinggi : <input type = "text" name = "tinggi"><br>
    Masukkan Sisi 1 : <input type = "text" name = "sisi1"><br>
    Masukkan Sisi 2 : <input type = "text" name = "sisi2"><br>
    Masukkan Sisi 3 : <input type = "text" name = "sisi3"><br>
    <input type="submit" name="Input" value="Input"><br>
    </form>
</body>
</html>

<?php
if (isset($_POST['Input'])) {
    $a = $_POST['alas'];
    $t = $_POST['tinggi'];
    $s1 = $_POST['sisi1'];
    $s2 = $_POST['sisi2'];
    $s3 = $_POST['sisi3'];

    $luas = 0.5 * $a * $t;
    $kel = $s1 * $s2 * $s3;

    echo "Luas Segitiga = $luas <br>";
    echo "Keliling Segitiga = $kel";
}
?>