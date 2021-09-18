<?php

class komputer {
   public function __construct() {
       echo "Constructor dari class komputer <br>";
   }
   
   public function __destruct() {
       echo "Destructor dari class komputer <br>";
   }
}

class laptop extends komputer {
    public function __construct() {
        echo "Constructor dari class laptop <br>";
   }
   public function __destruct() {
       echo "Destructor dari class laptop";
   }
}

class chromebook extends laptop {
   public function __construct() {
       echo "Constructor dari class chromebook <br>";
   }
   public function __destruct() {
       echo "Destructor dari class chromebook <br>";
   }
}

$gadget_baru = new chromebook();
echo "Belajar OOP PHP <br>";
?>