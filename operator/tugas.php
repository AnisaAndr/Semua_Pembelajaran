<?php
    $nilaiAkademik = 85;
    $nilaiAtletik = 80;

    echo "Nilai Akademik : <b>$nilaiAkademik</b> <br>";
    echo "Nilai Atletik : <b>$nilaiAtletik</b> <br>";
    $kelulusan = (($nilaiAkademik >= "85") && $nilaiAtletik >= "83") ? "Lulus" : "Tidak Lulus";
    echo "Dinyatakan : <b>".$kelulusan; 
?>