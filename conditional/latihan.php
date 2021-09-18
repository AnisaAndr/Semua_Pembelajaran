<?php

//No 1//
    $nilai = 60;

    if ($nilai >= 90) {
    echo "Nilai Anda $nilai,Grade A";

    } else if ($nilai >= 80) {
    echo "Nilai Anda $nilai,Grade B";

    } else if ($nilai >= 70){
    echo "Nilai Anda $nilai,Grade C";

    } else if ($nilai >= 60){
    echo "Nilai Anda $nilai,Grade D";

    } else {
    echo "Nilai Anda $nilai,Grade E";
    }
    
// No 2//
    $grade = "A";
    switch ($grade) {
    case 'A' : $ket = "Pertahankan"; 
    break;
    case 'B' : $ket = "Harus lebih baik lagi"; 
    break;
    case 'C' : $ket = "Perbanyak belajar"; 
    break;
    case 'D' : $ket = "Jangan Keseringan main"; 
    break;
    case 'E' : $ket = "Kebanyakan bolos"; 
    break;
    default : $ket = "Format tidak sesuai";
    }

    echo "<hr><br>Grade anda $grade,$ket <hr>";

//No 3//

    $nilai = 50;
    $grade = "";

    if ($nilai >= 90) {
        $grade ="A";

    } else if ($nilai >= 80) {
        $grade ="B";

    } else if ($nilai >= 70){
        $grade ="C";

    } else if ($nilai >= 60){
        $grade ="D";

    } else {
        $grade ="E";
    }

    switch ($grade) {
    case 'A' : $ket = "Pertahankan"; 
    break;
    case 'B' : $ket = "Harus lebih baik lagi"; 
    break;
    case 'C' : $ket = "Perbanyak belajar"; 
    break;
    case 'D' : $ket = "Jangan Keseringan main"; 
    break;
    case 'E' : $ket = "Kebanyakan bolos"; 
    break;
    default : $ket = "Tidak Ada Pilihan";
    }

    echo "Nilai : $nilai<br>";
    echo "Grade : $grade<br>";
    echo "Keterangan : $ket";

    
?> 