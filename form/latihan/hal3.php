<?php
if(isset($_POST['Selesai'])){
    
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $jk = $_POST['jk'];
    $agama = $_POST['Agama'];
    $nm = $_POST['namamobil'];
    $jm = $_POST['Jenis'];
    $merkmobil = $_POST['Merek'];
    $noplat = $_POST['plat'];
    $tp = $_POST['tp'];
    $tk = $_POST['tk'];
    $jamin = $_POST['Penjamin'];
    $supir = $_POST['Supir'];
    $tglverifikasi = $_POST['kembali'];

    $denda = 0;
    $biaya = 0;
    $harian = 0;


    if($supir == "Ya"){
        $harian = 275000;
        
    }else {
        $harian = 100000;
    }

    $hari = (strtotime($tk) - strtotime($tp)) / 60 / 60 / 24;
    $biaya = $hari * $harian;
    $telat = (strtotime($tglverifikasi) - strtotime($tk)) / 60 / 60 / 24;

    $denda = 240000 * $telat;
    $tb = $hari * $harian;
    $td = $denda;

    $total = $tb + $td;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HAL 3</title>
</head>
<body>
    <fieldset>
    <legend>Pinjaman Mobil</legend>
    <table border = "1">
    <form action="hal4.php" method="post">
    <tr align = "center"><th colspan = "6" rowspan = "1"><b>DATA DIRI</b></th></tr>
    <tr>
    <th rowspan = "1" colspan = "1"><b>Nama</b></th>
    <th rowspan = "1" colspan = "1"><b>NIK</b></th>
    <th rowspan = "1" colspan = "1"><b>Jenis Kelamin</b></th> 
    <th rowspan = "1" colspan = "1"><b>Agama</b></th> 
    <th rowspan = "1" colspan = "1"><b>Penjamin</b></th>
    <th rowspan = "1" colspan = "1"><b>Nama Mobil</b></th>
    </tr>
    
    <tr>
    <td><input type = "text" name = "nama" value = "<?php echo $nama;?>"></td>
    <td><input type = "text" name = "nik" value = "<?php echo $nik;?>"></td>
    <td><input type = "text" name = "jk" value = "<?php echo $jk;?>"></td>
    <td><input type = "text" name = "agama" value = "<?php echo $agama;?>"></td>
    <td><input type = "text" name = "Penjamin" value = "<?php echo $jamin;?>"></td>
    <td><input type = "text" name = "nm" value = "<?php echo $nm;?>"></td>
    </tr>

    <tr align = "center"><th colspan = "6" rowspan = "1"><b>DATA RENTAL MOBIL</b></th></tr>

    <tr>
    <th rowspan = "1" colspan = "1"><b>Jenis Mobil</b></th>
    <th rowspan = "1" colspan = "1"><b>Merek Mobil</b></th> 
    <th rowspan = "1" colspan = "1"><b>No Plat Mobil</b></th> 
    <th rowspan = "1" colspan = "1"><b>Tanggal Pinjam</b></th> 
    <th rowspan = "1" colspan = "1"><b>Tanggal Kembali</b></th>
    <th rowspan = "1" colspan = "1"><b>Menggunakan Supir</b></th>
    </tr>

    <tr>
    <td><input type = "text" name = "jm" value = "<?php echo $jm;?>"></td>
    <td><input type = "text" name = "Merek" value = "<?php echo $merkmobil;?>"></td>
    <td><input type = "text" name = "plat" value = "<?php echo $noplat;?>"></td>
    <td><input type = "text" name = "tp" value = "<?php echo $tp;?>"></td>
    <td><input type = "text" name = "tk" value = "<?php echo $tk;?>"></td>
    <td><input type = "text" name = "Supir" value = "<?php echo $supir;?>"></td>
    </tr>
    
    <tr align = "center"><th colspan = "6" rowspan = "1"><b>RINCIAN BIAYA</b></th></tr>
    <tr>
    <td rowspan = "1" colspan = "5"><b>Tanggal Verifikasi Kembali</b></td>
    <td><input type = "text" name = "kembali" value = "<?php echo $tglverifikasi;?>"></td>
    </tr>

    <tr>
    <td rowspan = "1" colspan = "5"><b>Lama Pinjaman</b></td>
    <td><input type = "text" name = "lp" value = "<?php echo $hari . " Hari";?>"></td>
    </tr>

    <tr>
    <td rowspan = "1" colspan = "5"><b>Telat Mengembalikan</b></td> 
    <td><input type = "text" name = "telat" value = "<?php echo $telat . " Hari";?>"></td>
    </tr>

    <tr>
    <td rowspan = "1" colspan = "5"><b>Biaya Harian</b></td>
    <td><input type = "text" name = "biaya" value = "<?php echo $biaya;?>"></td>
    </tr>
    
    <tr>
    <td rowspan = "1" colspan = "5"><b>Denda</b></td>
    <td><input type = "text" name = "denda" value = "<?php echo $denda;?>"></td>
    </tr>

    <tr align = "center"><th colspan = "6" rowspan = "1"><b>TOTAL BIAYA</b></th></tr>

    <tr>
    <td rowspan = "1" colspan = "5"><b>Total Biaya(Lama Pinjaman * Harian)</b></td>
    <td><input type = "text" name = "tb" value = "<?php echo $tb;?>"></td>
    </tr>

    <tr>
    <td rowspan = "1" colspan = "5"><b>Total Denda(Telat Mengembalikan * Biaya Denda)</b></td> 
    <td><input type = "text" name = "td" value = "<?php echo $td;?>"></td>
    </tr>

    <tr align = "center"><th colspan = "6" rowspan = "1"><b>PEMBAYARAN</b></th></tr>

    <tr>
    <td rowspan = "1" colspan = "5"><b>Total Pembayaran (Telat Biaya + Total Denda)</b></td>
    <td><input type = "text" name = "total" value = "<?php echo $total;?>"></td>
    </tr>

    <tr align = "right"><td colspan = "6" rowspan = "1"><input type = "submit" name = "next" value = "Bayar"></td></tr>
    
    </form>
    </table>
    </fieldset>
</body>
</html>