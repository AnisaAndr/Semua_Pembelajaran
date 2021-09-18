<?php
{
    class persegi{
        public $sisi = 10;

        public function luas(){
            return ($this->sisi * $this->sisi);
        }
        public function keliling(){
            return 4 * ($this->sisi);
        }
    }

        $persegi1 = new persegi();
        echo "Sisi : ". $persegi1->sisi. "<br>";
        echo "Luas Persegi : ". $persegi1->luas(). "<br>";
        echo "Keliling Persegi : ". $persegi1->keliling(). "<br>";
    }
?>