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
    <legend>Biodata</legend>
    <form action="" method="post">
        <table>

        <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type = "text" name = "nama" required></td>
        </tr>

        <tr>
        <td>Jenis Kelamin</td>
        <td>:</td> 
        <td><input type="radio" name="jk" value="Perempuan" required> Perempuan
        <input type="radio" name="jk" value="Laki-Laki" required> Laki-Laki</td>
        </tr>

        <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><input type = "date" name = "tgl_lahir" required></td>
        </tr>

        <tr>
        <td>Agama</td>
        <td>:</td> 
        <td><select name="Agama" required>
        <option value="">Pilih</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
        <option value="Khonghucu">Khonghucu</option>
        </select></td></tr>

        <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><textarea name="alamat" cols="25" rows="3" required>
        </textarea></td>
        </tr>

        <tr>
        <td>Hobi</td>
        <td>:</td> 
        <td><input type="checkbox" name="hobi[]" value="Membaca">Membaca
        <input type="checkbox" name="hobi[]" value="Menulis">Menulis
        <input type="checkbox" name="hobi[]" value="Memasak">Memasak
        <input type="checkbox" name="hobi[]" value="Menonton Film">Menonton Film
        <input type="checkbox" name="hobi[]" value="Bermain Alat Musik">Bermain Alat Musik
        <input type="checkbox" name="hobi[]" value="Bermain Game">Bermain Game
        </td>
        </tr>

        <tr>
        <td><input type="submit" name = "save" value="Simpan"></td>
        </tr>
    </table>
    </form>
    </fieldset>
</body>
</html>

<?php

if(isset($_POST['save'])){
    $nm = $_POST['nama'];
    $jenisk = $_POST['jk'];
    $tgllahir = $_POST['tgl_lahir'];
    $agm = $_POST['Agama'];
    $almt = $_POST['alamat'];
    $hobi = $_POST['hobi'];

    function biodata($nama, $jk, $tgl_lahir, $agama, $alamat, $hobi){

        echo "<b>Tampilan Biodata <br></b>";
        echo "Nama : ". $nama. "<br>";
        echo "Jenis Kelamin : ". $jk. "<br>";
        echo "Tanggal Lahir : ". $tgl_lahir. "<br>";
        echo "Agama : ". $agama. "<br>";
        echo "Alamat : ". $alamat. "<br>";
        echo "Hobi : ". implode(",", $hobi). "<br>";
    }
    biodata($nm,$jenisk,$tgllahir,$agm,$almt,$hobi);
}

?>
