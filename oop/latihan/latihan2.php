<?php
{
    class segitiga{
        public $alas = 20;
        public $tinggi = 30;
        public $a, $b, $c;

        public function luas(){
            return ($this->alas * $this->tinggi)/2;
        }
        public function keliling(){
            return ($this->a + $this->b + $this->c);
        }
    }

        $segitiga1 = new segitiga();
        $segitiga1->a = 10;
        $segitiga1->b = 20;
        $segitiga1->c = 5;
        echo "Alas : ". $segitiga1->alas. "<br>";
        echo "Tinggi : ". $segitiga1->tinggi. "<br>";
        echo "Sisi 1 : ". $segitiga1->a. "<br>";
        echo "Sisi 2 : ". $segitiga1->b. "<br>";
        echo "Sisi 3 : ". $segitiga1->c. "<br>";
        echo "Luas Segitiga : ". $segitiga1->luas(). "<br>";
        echo "Keliling Segitiga : ". $segitiga1->keliling(). "<br>";
    }
?>