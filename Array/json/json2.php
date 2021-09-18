<?php

$dataFilm = '{
    "Instructions" : "Delete everything in this object and make your own JSON object using different data.",
    "Title" : "The Graduate",
    "Year" : 1967,
    "Rated" : "Approved",
    "hobi" :[
        "Futsal", "Main Game", "Main Kelereng"
    ]
}';

$data = json_decode($dataJson);
echo "Nama : ". $data->nama. "<br>";
echo "Usia : {$data->usia} <br>";
echo "Domisili : {$data->domisili} <br>";
echo "Hobi : ". implode(",", $data->hobi);

?>