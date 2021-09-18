<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>GoFood</legend>
        <table>
            <form action="" method="post">
                <tr>
                    <td>Nama Barang</td>
                    <td>:</td>
                    <td><input type="text" name="barang" required></td>
                </tr>

                <tr>
                    <td>Harga</td>
                    <td>:</td>
                    <td><input type="text" name="harga" required></td>
                </tr>

                <tr>
                    <td>Jumlah Pesanan</td>
                    <td>:</td>
                    <td><input type="number" name="jumlah"required></td>
                </tr>

                <tr>
                    <td>Sistem Pembayaran</td>
                    <td>:</td>
                    <td><select name="sistem">
                        <option value="pilih" required>Pilih</option>
                        <option value="1">Cash</option>
                        <option value="2">M-Banking</option>
                        <option value="3">Gopay</option>
                        <option value="4">PickUp</option>
                    </select></td>
                </tr>

                <tr>
                    <td><input type="submit" name = "input" value="Input"></td>
                </tr>
            </form>
        </table>

<?php

if(isset($_POST['input'])){
    $barang = $_POST['barang'];
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $sistem = $_POST['sistem'];


    class Gofood{
        public $barang;
        public $harga;
        public $jumlah;
        public $sistem;

        public function diskon(){
            if(){

            }
        }
    }
}

?>

    </fieldset>
</body>
</html>