<?php
    $kartu = "Ya";
    $totalbelanja = 250;
    $disc = 0;
    $totalharga = 0;

    if($kartu == "Ya"){
        if ($totalbelanja >= 250000){
            $disc = 0.1 * $totalbelanja;
        }else if($totalbelanja >= 100000){
            $disc = 0.05 * $totalbelanja;
        }else {        
            $disc = "Tidak mendapatkan diskon";
        }
    } else {
        if($totalbelanja >= 150000){
            $disc = 0.025 * $totalbelanja;
        }   
    }
    $totalharga = $totalbelanja - $disc;
    echo "Kartu Member : $kartu<br>";
    echo "Total belanja : $totalbelanja<br>";
    echo "Diskon : $disc<br>";
    echo "Yang harus dibayar : $totalharga ";
?>