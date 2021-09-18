<?php

class komputer{
    public function lihat_spec(){
        return "Spec Komputer : Acer, Processor Intel Core i7, Ram 4 GB";
    }
}

class laptop extends komputer{
    public function lihat_spec(){
        return "Spec Laptop : Asus, Processor Intel Core i5, Ram 2 GB";
    }
}

$gadget_baru = new laptop();

echo $gadget_baru->lihat_spec();

?>