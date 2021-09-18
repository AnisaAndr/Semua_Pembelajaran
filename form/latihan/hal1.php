<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HAL 1</title>
</head>
<body>
    <fieldset>
    <legend>Peminjaman Rental Mobil</legend>
    <table>
    <form action="hal2.php" method="post">
    <tr> 
    <td>Nama</td>
    <td>:</td>
    <td><input type = "text" name = "nama" placeholder = "Masukkan Nama" required></td></tr>

    <tr>
    <td>NIK </td>
    <td> : </td>
    <td><input type = "text" name = "nik" placeholder = "Masukkan NIK" required></td></tr>

    <tr>
    <td>Jenis Kelamin</td>
    <td>:</td> 
    <td><input type="radio" name="jk" value="Perempuan" required> Perempuan
    <input type="radio" name="jk" value="Laki-Laki" required> Laki-Laki</td>
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
    <td>Nama Mobil</td>
    <td>:</td>
    <td><input type = "text" name = "namamobil" placeholder = "Masukkan Nama Mobil" required></td></tr>


    <tr>
    <td>Jenis Mobil</td>
    <td>:</td> 
    <td><select name="Jenis" required>
    <option value="">Pilih</option>
    <option value="Sedan">Sedan</option>
    <option value="Sport">Sport</option>
    <option value="SUV">SUV</option>
    <option value="MVP">MVP</option>
    <option value="Coupe">Coupe</option>
    </select></td></tr>

    <tr>
    <td>Merk Mobil</td>
    <td>:</td> 
    <td><select name="Merek" required>
    <option value="">Pilih</option>
    <option value="Honda">Honda</option>
    <option value="Toyota">Toyota</option>
    <option value="Suzuki">Suzuki</option>
    <option value="Daihatsu">Daihatsu</option>
    <option value="Mitsubishi">Mitsubishi</option>
    </select></td></tr>

    <tr>
    <td>No Plat Mobil</td>
    <td>:</td>
    <td><input type = "text" name = "plat" placeholder = "Masukkan No Plat Mobil" required></td></tr>

    <tr>
    <td>Tanggal Peminjaman</td>
    <td> :</td>
    <td><input type = "date" name = "tp" required></td></tr>

    <tr>
    <td>Tanggal Kembali</td>
    <td>:</td>
    <td><input type = "date" name = "tk" required></td></tr>

    <tr>
    <td>Penjamin</td>
    <td>:</td> 
    <td><select name="Penjamin" required>
    <option value="">Pilih</option>
    <option value="Foto Copy KTP">Foto Copy KTP</option>
    <option value="Foto Copy SIM">Foto Copy SIM</option>
    <option value="Foto Copy KK">Foto Copy KK</option>
    </select></td></tr>

    <tr>
    <td>Supir</td>
    <td>:</td> 
    <td><select name="Supir" required>
    <option value="">Pilih</option>
    <option value="Ya">Ya</option>
    <option value="Tidak">Tidak</option>
    </select></td></tr>

    <tr>
    <td><input type = "submit" name = "Next" value = "Next">
    <input type = "reset" name = "reset" value = "reset"></td></tr>

    </form>
    </table>
    </fieldset>
</body>
</html>