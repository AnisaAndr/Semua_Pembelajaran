<?php
    $sim = "Ya";
    $stnk = "Tidak";

//pengecekan kelengkapan surat berkendara//
    if($sim == "Ya"){
        if ($stnk == "Ya"){
            echo "Selamat menjalankan aktivitas,hati-hati berkendara";
        }else{
            echo "Maaf Anda Kami Tilang";
        }
    } else {
        echo "Maaf Anda Kami tilang";
    }
?>