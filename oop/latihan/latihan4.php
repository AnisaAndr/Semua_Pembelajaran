<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <fieldset>
        <legend>Aritmatika</legend>
        <table>
            <form action="" method="post">
        <tr>
            <td>Bilangan 1</td>
            <td>:</td>
            <td><input type="number" name="bil1"></td>
        </tr>

        <tr>
            <td>Bilangan 2</td>
            <td>:</td>
            <td><input type="number" name="bil2"></td>
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
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];

    class aritmatika{
        public $bill1;
        public $bill2;

        public function  __construct($bill1, $bill2){
            $this->bill1 = $bill1;
            $this->bill2 = $bill2;
        }

        public function penjumlahan(){
            return ($this->bill1 + $this->bill2);
        }

        public function pengurangan(){
            return ($this->bill1 - $this->bill2);
        }

        public function pembagian(){
            return ($this->bill1 / $this->bill2);
        }

        public function perkalian(){
            return ($this->bill1 * $this->bill2);
        }

        public function modulus(){
            return ($this->bill1 % $this->bill2);
        }
    }

    $aritmatika1 = new aritmatika($bil1,$bil2);
    

    echo "<b>Hasil Pertambahan : </b>". $bil1. " + ". $bil2. " = ". $aritmatika1->penjumlahan()."<br>";
    echo "<b>Hasil Pengurangan : </b>". $bil1. " - ". $bil2. " = ". $aritmatika1->pengurangan()."<br>";
    echo "<b>Hasil Pembagian : </b>". $bil1. " / ". $bil2. " = ". $aritmatika1->pembagian()."<br>";
    echo "<b>Hasil Perkalian : </b>". $bil1. " x ". $bil2. " = ". $aritmatika1->perkalian()."<br>";
    echo "<b>Hasil Modulus : </b>". $bil1. " % ". $bil2. " = ". $aritmatika1->modulus()."<br>";
    

}
?>