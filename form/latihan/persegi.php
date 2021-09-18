<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Persegi</title>
</head>
<body>
    <h2>LUAS DAN KELILING PERSEGI</h2><br>
    <FORM ACTION="" METHOD="POST">
    Masukkan Sisi : <input type = "text" name = "sisi"><br>
    Masukkan Panjang : <input type = "text" name = "panjang"><br>
    Masukkan Lebar : <input type = "text" name = "lebar"><br>
    <input type="submit" name="Input" value="Input"><br>
    </form>
</body>
</html>

<?php
if (isset($_POST['Input'])) {
    $s = $_POST['sisi'];
    
    $luas = $s * $s ;
    $kel = 4 * $s;

    echo "Luas Persegi = $luas <br>";
    echo "Keliling Persegi = $kel";
}
?>