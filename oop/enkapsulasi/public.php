<?php

class Laptop{
    public $pemilik;

    public function hidupkanLaptop(){
        return "Hidupkan Laptop";
    }
}

$laptopAnto = new Laptop();
$laptopAnto->pemilik = "Anto";

echo $laptopAnto->pemilik. "<br>";
echo $laptopAnto->hidupkanLaptop();

?>