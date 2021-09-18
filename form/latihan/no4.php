<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="proses4.php" method="post">
    <table> 
    <tr>
    <td>Nama</td> 
    <td>:</td> 
    <td><input type = "text" name = "nama" placeholder = "Masukkan Nama" required></td></tr><br>

    <tr>
    <td>Jenis Kelamin</td>
    <td>:</td> 
    <td><input type="radio" name="jk" value="Perempuan" required> Perempuan
    <input type="radio" name="jk" value="Laki-Laki" required> Laki-Laki</td>
    </tr><br>

    <tr>
    <td>Agama</td>
    <td>:</td> 
    <td><select name="Agama" required>
    <option value="">Pilih</option>
    <option value="Islam">Islam</option>
    <option value="Kristen">Kristen</option>
    <option value="Hindu">Hindu</option>
    <option value="Budha">Budha</option>
    <option value="Khonghucu">Khonghucu</option></td></tr>
    </select><br>

    <tr>
    <td>Golongan</td> 
    <td>:</td>
    <td><select name="Golongan" required>
    <option value="">Pilih</option>
    <option value="1">Golongan 1</option>
    <option value="2">Golongan 2</option>
    <option value="3">Golongan 3</option>
    <option value="4">Golongan 4</option></td></tr>
    </select><br>

    <tr>
    <td>Jumlah Jam</td>
    <td>:</td> 
    <td><input type = "number" name = "Jam"><br></td></tr>
    </table>    

    <input type = "submit" name = "Input" value = "Input">
    <input type = "reset" name = "reset" value = "reset">
    
    </form>
</body>
</html>