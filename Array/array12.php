<?php

//Array 2 dimensi
$email["subjek"] = "Apa Kabar?";
$email["pengirim"] = "dian@petanikode.com";
$email["isi"] = "Apa Kabar sudah lama tidak jumpa";

echo "<pre>";
print_r($email);
echo "</pre>";

echo $email["pengirim"];


?>