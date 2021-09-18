<?php

class komputer{
    protected function beli_komputer(){
        return "Beli Laptop Baru";
    }
}

class laptop extends komputer{
    protected function beli_laptop(){
        return "Beli Laptop Baru";
    }
}

class chroombook extends laptop{
    protected function beli_chroombook(){
        return "Beli Chroombook baru";
    }

    public function beli_semua(){
        $a = $this->beli_komputer();
        $b = $this->beli_laptop();
        $c = $this->beli_chroombook();
        return "$a <br> $b <br> $c";
    }
}

$gadget_baru = new chroombook();

echo $gadget_baru->beli_semua();

?>