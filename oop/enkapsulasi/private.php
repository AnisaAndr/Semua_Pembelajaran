<?php

class Komputer{
    private $jenisProcessor = "Intel Core 17";

    public function tampilkanJenisProcessor(){
        return $this->jenisProcessor;
    }
}

class Laptop extends Komputer{
    public function getProcessor(){
        return $this->jenisProcessor;
    }
}

$komputer = new Komputer();
$laptop = new Laptop();

echo $komputer->tampilkanJenisProcessor();
echo $laptop->getProcessor();

?>