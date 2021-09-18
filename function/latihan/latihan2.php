<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <fieldset>
        <legend>Fungsi Perhitungan Bangun Datar</legend>
        <form action="" method = "post">
        <table>

        <tr>
        <td>Jari - Jari</td>
        <td>:</td>
        <td><input type = "text" name = "jari"></td></tr>

        <tr>
        <td><input type = "submit" name = "next" value ="Next"></td>
        </tr>
</table>
</form>

<?php
        if(isset($_POST['next'])){
            $j = $_POST['jari'];

            function luasLingkaran($jari, $phi = 3.14){
                $luas = $phi * $jari * $jari;
                return $luas;
            }

            function kelilingLingkaran($jari, $phi = 3.14){
                $keliling = 2 * $phi * $jari;
                return $keliling;
            }
        ?>

        Jari - Jari = <?php echo $j;?><br>
        Luas Lingkaran = <?php echo luasLingkaran($j)?><br>
        Keliling Lingkaran = <?php echo kelilingLingkaran($j);?><br>

        <?php } ?>

    </fieldset>
</body>
</html>

<?php



?>