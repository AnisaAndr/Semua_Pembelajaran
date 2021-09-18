<?php
{
    class komputer{
        public $namaPemilik = "Anisa";
        public $alamat = "Kp. Bojong Cijerah";
        public $merk = "Lenovo";
        public $ukuranLayar = "17 inc";

        public function nyala(){
            return "On";
        }
        public function mati(){
            return "Shut down";
        }
    }

    $komputer1 = new komputer();
    echo "<b>Data Pemilik <br></b>";
    echo "Nama Pemilik : ". $komputer1->namaPemilik. "<br>";
    echo "Alamat Pemilik : ". $komputer1->alamat. "<br>";
    echo "Merk : ". $komputer1->merk. "<br>";
    echo "Ukuran Layar : ". $komputer1->ukuranLayar. "<br>";
    echo "Sifat Komputer : ". $komputer1->mati(). "<br><hr>";

    $komputer2 = new komputer();
    echo "<b>Data Pemilik <br></b>";
    $komputer2->namaPemilik = "Astri";
    echo "Nama Pemilik : ". $komputer2->namaPemilik. "<br>";
    echo "Alamat Pemilik : ". $komputer2->alamat. "<br>";
    $komputer2->merk = "Asus";
    echo "Merk : ". $komputer2->merk. "<br>";
    $komputer2->ukuranLayar = "20 inc";
    echo "Ukuran Layar : ". $komputer2->ukuranLayar. "<br>";
    echo "Sifat Komputer : ". $komputer2->mati(). "<br><hr>";

    $komputer3 = new komputer();
    echo "<b>Data Pemilik <br></b>";
    $komputer3->namaPemilik = "Putri";
    echo "Nama Pemilik : ". $komputer3->namaPemilik. "<br>";
    echo "Alamat Pemilik : ". $komputer3->alamat. "<br>";
    $komputer3->merk = "Apple";
    echo "Merk : ". $komputer3->merk. "<br>";
    $komputer3->ukuranLayar = "23 inc";
    echo "Ukuran Layar : ". $komputer3->ukuranLayar. "<br>";
    echo "Sifat Komputer : ". $komputer3->mati(). "<br><hr>";

    $komputer4 = new komputer();
    echo "<b>Data Pemilik <br></b>";
    $komputer4->namaPemilik = "Indah";
    echo "Nama Pemilik : ". $komputer4->namaPemilik. "<br>";
    echo "Alamat Pemilik : ". $komputer4->alamat. "<br>";
    $komputer4->merk = "Samsung";
    echo "Merk : ". $komputer4->merk. "<br>";
    $komputer4->ukuranLayar = "22 inc";
    echo "Ukuran Layar : ". $komputer4->ukuranLayar. "<br>";
    echo "Sifat Komputer : ". $komputer4->mati(). "<br><hr>";

    $komputer5 = new komputer();
    echo "<b>Data Pemilik <br></b>";
    $komputer5->namaPemilik = "Anggi";
    echo "Nama Pemilik : ". $komputer5->namaPemilik. "<br>";
    echo "Alamat Pemilik : ". $komputer5->alamat. "<br>";
    $komputer5->merk = "Philips";
    echo "Merk : ". $komputer5->merk. "<br>";
    $komputer5->ukuranLayar = "20 inc";
    echo "Ukuran Layar : ". $komputer5->ukuranLayar. "<br>";
    echo "Sifat Komputer : ". $komputer5->mati(). "<br><hr>";
}
?>