<?php
//membuat array
    $hobi = [
        "Membaca",
        "Menulis",
        "Ngeblog"
    ];

    //menambahkan array
    $hobi[3] = " Coding";;

    //menghapus array
    unset($hobi[1]);
    $hobi[] = "Olahraga";

    //cetak array dengan perulangan
    foreach($hobi as $hobiku){
        echo $hobiku. "<br>";
    }

?>