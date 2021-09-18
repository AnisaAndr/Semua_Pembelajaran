<?php
if(isset($_POST['next'])){
    $total = $_POST['total'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HAL 4</title>
</head>
<body>
    <fieldset>
    <legend>Pembayaran</legend>
    <form action="" method="post">
    <table>
    <input type = "hidden" name = "total" value = "<?php echo $total;?>">
    <tr>
    <td>Uang Pembayaran</td>
    <td>:</td> 
    <td><input type = "text" name = "uang" placeholder = "Masukan Uang Pembayaran"></td></tr>

    <tr>
    <td><input type = "submit" name = "Bayar" value = "Bayar"></td>
    </tr>
    </table>
    </form></fieldset>
</body>
</html>

<?php
if(isset($_POST['Bayar'])){
    $uang = $_POST['uang'];
    $total = $_POST['total'];

    if($uang >= $total){
        $kembali = $uang - $total; 
        $ket = "Kembalian Anda $kembali, Terima Kasih Jangan Lupa Datang Kembali";
    }else{
        $ket = "Maaf Uang Anda Kurang, Harap Tambahkan Pembayaran Atau Anda Kami Blacklist";
    }

    echo "<b>Keterangan :</b> $ket";
}
?>