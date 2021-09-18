<?php

    function tampilkanAngka(int $jumlah, int $indeks = 1){
        echo "<stong style = 'color : green'>
        sebelum memanggil diri sendiri[{$indeks}] </srong><br>";

        if($indeks < $jumlah){
            tampilkanAngka($jumlah, $indeks + 1);
        } else {
            echo "<strong style = 'color : red'> Proses terakhir. </strong><br>";
        }
        echo "<strong style = 'color : blue'> Sebelum memanggil diri sendiri[{$indeks}]. </strong><br>";
    }
    tampilkanAngka(5);

?>