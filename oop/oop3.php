<?php

//mendefinisikan sebuah class
class kucing{
    //membuat property atau atributes
    public $warna;

    //construct adalah method khusus yang akan dipanggil pertama kali
    public function  __construct($warna){
        $this->warna = $warna;
    }

    //membuat metho (behaviour/perilaku)
    public function bersuara(){
        return "berburu ikan";
    }
}

//membuat object (inisiasi Object)
$kucing1 = new kucing("Hitam");
echo "Warna Kucing 1 : ". $kucing1->warna. "<br>";

$kucing2 = new kucing("Oren");
echo "Warna Kucing 2 : ". $kucing2->warna. "<br>";

?>