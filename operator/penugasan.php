<?php
    $uangUcup = 100000;
    $air      = 15000;
    $sosis    = 25000;
    

    echo "Uang Ucup = <b>$uangUcup</b><br>";
    echo "<hr>";

    echo "Jajan Minum = <b>$air</b> <br>";
    $sisa = $uangUcup - $air;
    echo "Sisa uang Ucup Jajan Minum = <b>$sisa</b>";
    echo "<hr>";

    echo "Jajan Sosis Bakar = <b>$sosis</b><br>";
    $sisaJajan = $sisa - $sosis;
    echo "Sisa uang Ucup jajan Sosis Bakar + Minum = <b>$sisaJajan</b>";
    echo "<hr>";

    $sisaSedekah = $sisaJajan * 0.1;
    echo "Sedekah ke musafir 10% dari <b>$sisaJajan</b> yaitu sebesar <b>$sisaSedekah</b> <br>";
    $sisaUang = $sisaJajan - $sisaSedekah;
    echo "Sisa uang Ucup = <b>$sisaUang</b>";
    echo "<hr>";

    $nemu = $sisaUang * 0.5;
    echo "Nemu uang dijalan sebesar 50% dari sisa uang Ucup <b>$sisaUang </b> yaitu sebesar <b>$nemu</b> <br>";
    $total = $nemu + $sisaUang;
    echo "Sisa uang Ucup sekarang = <b>$nemu + $sisaUang</b>";
    echo "<hr>";

    echo "Total uang Ucup adalah <b> Rp.$total</b>";
?>