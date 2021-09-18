<?php
    $userName = "Anisa";
    $password = "1234";
    $email = "anisa@gmail.com";

    echo "Username / Email : $userName <br>";
    echo "Password : $password<br>";

    echo "Cek Login : "
    .(($userName == "Anisa") || $email == "anisa@gmail.com") && ($password == "1234");

    
?>