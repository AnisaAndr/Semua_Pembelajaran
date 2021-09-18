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
        <legend>Kucing</legend>
        <form action="" method="post">
        <table>

        <tr>
            <td>Nama Kucing</td>
            <td>:</td>
            <td><input type="text" name="nama"></td>
        </tr>

        <tr>
            <td>Warna Kucing</td>
            <td>:</td>
            <td><input type="text" name="warna"></td>
        </tr>
        
        <tr>
            <td>Jumlah Kaki Kucing</td>
            <td>:</td>
            <td><input type="number" name="jumlah"></td>
        </tr>

            <tr>
                <td><input type="submit" name = "input" value="Input"></td>
            </tr>
        </table>
        </form>
    </fieldset>
</body>
</html>

<?php
        if(isset($_POST['input'])){
            $nama = $_POST['nama'];
            $warna = $_POST['warna'];
            $jumlah = $_POST['jumlah'];

            class Kucing{
                public $nama;
                public $warna;
                public $jumlah; 

                public function namaKucing($nama){
                    return $nama;
                }

                public function warnaKucing($warna){
                    return $warna;
                }

                public function jumlahKakiKucing($jumlah){
                    if($jumlah == 3){
                        return "Kucing Cingked";
                    }
                    if($jumlah == 4){
                       return "Kucing Normal";
                    }
                    if($jumlah >= 5){
                        return "Siluman Kucing";
                    }
                }
            }

            $kucing1 = new Kucing();

        echo "Nama Kucing :  ". $kucing1->namaKucing($nama). "<br>";
        echo "Warna Kucing : ". $kucing1->warnaKucing($warna). "<br>";
        echo "Jumlah Kaki Kucing : ". $jumlah. ",". $kucing1->jumlahKakiKucing($jumlah);
        }
?>