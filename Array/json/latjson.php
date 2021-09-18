<?php

$dataFilm = '{
    "Title" : "The Graduate",
    "Year" : "1967",
    "Rated" : "Approved",
    "Realeased" : "22 Dec 1967",
    "Runtime : "106 min",
    "Genre" :[
        "Comedy", 
        "Drama", 
        "Romance"
    ],
    "Director" : "Mike Nichols",
    "Writers" : [
        "Calder Willingham(screenplay)",
        "Buck Henry(screenplay)",
        "Charles Webb (based on the novel by)"
    ],
    "Actors" : [
        "Anne Bancroft",
        "Dustin Hoffman",
        "Katharine Ross",
        "William Daniels"
    ],
    "Plot" : "Been has recently graduate college, with his parents now expecting great things from him. At his
    \"Homecoming\" party, Mrs. Robinson, the wife of his fathers business partner, has ben drive her home, 
    wich leads to an affair between the two. The affair eventually ends, but comes back to haunt him when he finds
    himself falling for Elaine, Mrs. Robinsons daughter.",

    "Language" : "English",
    "Country" : "USA",
    "Awards" : "Won 1 Oscar. Another 22 wins & 13 Nominations.",
    "Poster" : "https://timlo.net/wp-content/uploads/2020/10/spider-verse.jpg",
    "imdbRating" : "8.1",
    "imdbVotes" : "183,131",
    "imdbID" : "tt0061722"

}';
 
$data = json_decode($dataFilm);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON</title>
</head>
<body>
    <center>Data Film</center>
    <table>
    <tr>
    <th><?php echo $data->Title;?></th>
    </tr>

    <tr>
    <td><?php echo $data->Poster;?></td>
    </tr>

    <tr>
    <td><?php echo $data->Plot;?></td>
    </tr>

    <tr>
    <td><b>Tahun Rilis</b></td>
    <td><?php echo $data->Year;?></td>
    </tr>

    <tr>
    <td><b>Tanggal Rilis</b></td>
    <td>:</td>
    <td><?php echo $data->Realeased;?></td>
    </tr>

    <tr>
    <td><b>Durasi Film</b></td>
    <td>:</td>
    <td><?php echo $data->Runtime;?></td>
    </tr>

    <tr>
    <td><b>Genre</b></td>
    <td>:</td>
    <td><?php echo implode(",", $data->Genre);?></td>
    </tr>

    <tr>
    <td><b>Director</b></td>
    <td>:</td>
    <td><?php echo $data->Director;?></td>
    </tr>

    <tr>
    <td><b>Penulis</b></td>
    <td>:</td>
    <li><ol><td><?php echo $data->Writers;?></td></li></ol>
    </tr>

    <tr>
    <td><b>Pemeran</b></td>
    <td>:</td>
    <li><ol><td><?php echo $data->Actors;?></td></li></ol>
    </tr>

    <tr>
    <td><b>Bahasa</b></td>
    <td>:</td>
    <td><?php echo $data->Language;?></td>
    </tr>

    <tr>
    <td><b>Negara</b></td>
    <td>:</td>
    <td><?php echo $data->Country;?></td>
    </tr>

    <tr>
    <td><b>Penghargaan</b></td>
    <td>:</td>
    <td><?php echo $data->Awards;?></td>
    </tr>

    <tr>
    <td><b>Nilai</b></td>
    <td>:</td>
    <td><?php echo $data->imdbRating;?></td>
    </tr>

    <tr>
    <td><b>Vote</b></td>
    <td>:</td>
    <td><?php echo $data->imdbVotes;?></td>
    </tr>

    <tr>
    <td><b>imdbID</b></td>
    <td>:</td>
    <td><?php echo $data->imdbID;?></td>
    </tr>

    </table>
</body>
</html>

