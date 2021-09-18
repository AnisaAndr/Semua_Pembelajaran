<?php
if (isset($_POST['input'])) {
    
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $operator = $_POST['operator'];

    if($operator == "tambah"){
        $tambah = $bil1 + $bil2;
        echo " $bil1 + $bil2 = $tambah <br>";
    } else if($operator == "kurang"){
        $tambah = $bil1 + $bil2;
        echo "Bilangan 1 + bilangan 2 = $kurang <br>";
    }else if($operator == "tambah"){
        $tambah = $bil1 + $bil2;
        echo "Bilangan 1 + bilangan 2 = $tambah <br>";
    }else if($operator == "tambah"){
        $tambah = $bil1 + $bil2;
        echo "Bilangan 1 + bilangan 2 = $tambah <br>";
    }

    $tambah = $bil1 + $bil2;
    $kurang = $bil1 - $bil2;
    $kali = $bil1 * $bil2;
    $bagi = $bil1 / $bil2;
    
    echo "Bilangan 1 + bilangan 2 = $tambah <br>";
    echo "Bilangan 1 - bilangan 2 = $kurang <br>";
    echo "Bilangan 1 * bilangan 2 = $kali <br>";
    echo "Bilangan 1 / bilangan 2 = $bagi <br>";
}
?> 