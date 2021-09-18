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
        <legend>Perpangkatan</legend>
        <table>
            <form action="" method="post">

                <tr>
                    <td>Masukkan Bilangan</td>
                    <td>:</td>
                    <td><input type = "number" name = "bilangan"></td>
                </tr>

                <tr>
                    <td>Masukkan Pangkat</td>
                    <td>:</td>
                    <td><input type="number" name="pangkat"></td>
                </tr>   

                <tr>
                    <td><input type="submit" name = "input" value="Input"></td>
                </tr>
            </form>
        </table>
    </fieldset>
</body>
</html>

<?php

    if(isset($_POST['input'])){
        $bil = $_POST['bilangan'];
        $pangkat = $_POST['pangkat'];

    function perpangkatan($bil, $pangkat){
    if($pangkat > 1){
        return $bil * $pangkat($bil, $pangkat -1);
        echo $bil;
    } else{
        return 
        $bil;
    }
    }

    function pangkatnya($bil, $pangkat){

    for ($i = 1; $i <= $pangkat; $i++){
        echo $bil;
        if($i < $pangkat){
            echo "X";
        }
    }
    echo "Hasil Dari Perpangkatan : {$bil}";
    }
    perpangkatan($bil, $pangkat);
}

?>