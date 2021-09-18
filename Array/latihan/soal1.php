<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data Array</title>
</head>
<body>
    <fieldset>
    <legend>Program Masuk Sekolah Favorit</legend>
    <form action="" method="post">
    <table>

    <tr>
    <th>Masukkan Jumlah Data</th>
    <td>: <input type = "number" name = "jumlah" required></td>
    </tr>

    <tr>
    <th>
    </th>
    <td><button type="submit" name = "next">Next</button>
    <button type="reset">Reset</button>
    </td>
    </tr>

    </table>
    </form>
    </fieldset>

    <?php 
    if(isset($_POST['next']))
    {
        $row = $_POST['jumlah'];
    
    ?>

    <fieldset>
    <legend>Input Data Siswa</legend>
    <table>
    <form action="soal1pro.php" method="post">
    
    <?php
    for($i = 1; $i <= $row; $i++){
    ?>

    <tr>
    <tr>
    <th colspan = 2>Data ke- <?php echo $i;?></th>
    <td>Nama</td>
    <td><input type = "text" name = "nama[]" required></td>
    </tr>
    
    <tr>
    <th colspan = 2></th>
    <td>Asal Sekolah</td>
    <td><input type = "text" name = "asal[]" required></td>
    </tr>
    </tr>

    <tr>
    <th colspan = 2></th>
    <td>Nilai Bahasa Indonesia</td>
    <td><input type = "number" name = "indo[]" min = 1 max = 100 required></td>
    </tr>
    </tr>

    <tr>
    <th colspan = 2></th>
    <td>Nilai Matematika</td>
    <td><input type = "number" name = "mtk[]" min = 1 max = 100 required></td>
    </tr>
    </tr>

    <tr>
    <th colspan = 2></th>
    <td>Nilai Bahasa Inggris</td>
    <td><input type = "number" name = "inggris[]" min = 1 max = 100 required></td>
    </tr>
    </tr>

    <tr>
    <th colspan = 2></th>
    <td>Nilai IPA</td>
    <td><input type = "number" name = "ipa[]" min = 1 max = 100 required></td>
    </tr>
    </tr>

    <?php
    }
    ?>

    <tr>
    <th></th>
    <td><button type="submit" name = "save">Simpan</button><td>
    </tr>
     
    </form>
    </table>
    </fieldset>
    <?php
    }
    ?>

</body>
</html>