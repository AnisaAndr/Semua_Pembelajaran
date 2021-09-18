<?php
if(isset($_POST['Next'])){
    
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $jk = $_POST['jk'];
    $agama = $_POST['Agama'];
    $nm = $_POST['namamobil'];
    $jm = $_POST['Jenis'];
    $merk = $_POST['Merek'];
    $noplat = $_POST['plat'];
    $tp = $_POST['tp'];
    $tk = $_POST['tk'];
    $jamin = $_POST['Penjamin'];
    $supir = $_POST['Supir'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HAL 2</title>
</head>
<body>
    <fieldset>
    <legend>Verifikasi Pembayaran</legend>
    <table>
    <form action="hal3.php" method="post">
    <input type = "hidden" name = "nama" value = "<?php echo $nama;?>">
    <input type = "hidden" name = "nik" value = "<?php echo $nik;?>">
    <input type = "hidden" name = "jk" value = "<?php echo $jk;?>">
    <input type = "hidden" name = "Agama" value = "<?php echo $agama;?>">
    <input type = "hidden" name = "namamobil" value = "<?php echo $nm;?>">
    <input type = "hidden" name = "Jenis" value = "<?php echo $jm;?>">
    <input type = "hidden" name = "Merek" value = "<?php echo $merk;?>">
    <input type = "hidden" name = "plat" value = "<?php echo $noplat;?>">
    <input type = "hidden" name = "tp" value = "<?php echo $tp;?>">
    <input type = "hidden" name = "tk" value = "<?php echo $tk;?>">
    <input type = "hidden" name = "Penjamin" value = "<?php echo $jamin;?>">
    <input type = "hidden" name = "Supir" value = "<?php echo $supir;?>">

    <tr>
    <td>Tanggal Kembali</td>
    <td>:</td>
    <td><input type="date" name = "kembali" required></td>
    </tr>

    <tr>
    <td><input type = "submit" name = "Selesai" value = "Selesai">
    <input type = "reset" name = "reset" value = "Reset"></td></tr>

</form>
    </table>
    </fieldset>
</body>
</html>


