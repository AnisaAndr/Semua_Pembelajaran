<?php
{
    //mendefinisikan sebuah class
    class kucing{
        //membuat property atau atribute
        public $warna = "Coklat";
        public $jumlahKaki = 4;
        public $jenisBulu = "Panjang";
        public $makananFavorit = "Ikan";

        //membuat method (behaviour)
        public function bersuara(){
            return "Meong.... Meong....Meong....";
        }
        public function berburu(){
            return "Berburu ikan";
        }
    }

    //membuat object (inisiasi object)
    $kucing1 = new kucing();
    echo "Warna Kucing : ". $kucing1->warna. "<br>";
    echo "Sifat Kucing : ". $kucing1->bersuara(). "<br>";

    $kucing2 = new kucing();
    //set warna kucing
    $kucing2->warna = "Oren";
    echo "Warna Kucing : ". $kucing2->warna. "<br>";
    echo "Sifat Kucing : ". $kucing2->bersuara();
}
?>