<?php

class Instagram{
    public $user = "Anisa Andriani";
    protected $email = "anisaandriani@gmail.com";
    private $pass = "Anisa123";

    public function login(){
        $a = $this->email;
        $b = $this->pass;

        if($email == "anisaandriani@gmail.com" && $pass == "Anisa123"){
            echo $c = "Login Berhasil";
        }
        return $c;
    }
    public function getLogin(){
        $a = $this->email;
        $b = $this->user;
        $c = "Email : ". $a. "Username : ". $b;
        return $c;
    }
}

$ig = new Instagram();

echo "Username : $ig->user<br>";
echo "Email : $ig->email<br>";
echo "Password : $ig->login()";

?>