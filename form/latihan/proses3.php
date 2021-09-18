<?php
if (isset($_POST ['Input'])){
    $bintang = $_POST['bintang'];

    for($i = 1; $i <= $bintang; $i++){
        for ($a = $bintang; $a > $i; $a--){
        echo "&nbsp;";
        }
        for($b = 1; $b <= $i; $b++){
            echo " * ";
        }
        echo "<br>";
    }
    
    for($b = $bintang; $b >= 1; $b--){
        for($x = $bintang; $x >= $a; $x--){
            echo "&nbsp;";
        }
        
        for($y = 1; $y <= $b; $y++){
            echo " * ";
        }
        echo "<br>";
    }
}
?>