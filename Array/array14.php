<?php 
// membuat array 2  dimensi yang berisi array 

$artikel = [
    [
        "judul" => "Belajar PHP dan MySQL untuk pemula",
        "penulis" => "petanikode"
    ],
    [
        "judul" => "Tutorial PHP dan MySQL hingga mahir",
        "penulis" => "petanikode"
    ],
    [
        "judul" => "Membuat aplikasi web dengan PHP",
        "penulis" => "petanikode"
    ]
    ];

    //menampilkan array
    foreach($artikel as $post){
        echo "<h2>". $post["judul"]. "</h2";
        echo "<p>". $post["penulis"]. "<p>";
        echo "<hr>";
    }

?>