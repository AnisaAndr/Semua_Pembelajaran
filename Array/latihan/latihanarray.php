<?php

$data = [
    [
        'dosen' => "Aceng Fikri",
        'mahasiswa' => [
            [
                'nama' => "Anisa Andriani",
                'matkul' => [
                        ["nama" => "Bahasa Indonesia"],
                        ["nama" => "Bahasa Inggris"],
                        ["nama" => "Matematika"],
                    ],
                'hobi' => [
                        ["nama" => "Membaca"],
                        ["nama" => "Memasak"],
                    ],
                ],
                    [
                        'nama' => "Astri Pitriana",
                        'matkul' => [
                        ["nama" => "Kimia"],
                        ["nama" => "Biologi"],
                        ["nama" => "Sastra"],
                        ],
                        'hobi' => [
                        ["nama" => "Menonton"],
                        ["nama" => "Menggambar"],
                    ],
                ],
                [
                    'nama' => "Putri Perdana",
                    'matkul' => [
                    ["nama" => "Fisika"],
                    ["nama" => "Bahasa Sunda"],
                    ["nama" => "KWU"],
                    ],
                    'hobi' => [
                    ["nama" => "Menari"],
                    ["nama" => "Bernyanyi"],
                ],
            ],
            ]
        ],

        [
            'dosen' => "Ujang Betok",
            'mahasiswa' => [
                [
                    'nama' => "Alya Nurlia",
                    'matkul' => [
                            ["nama" => "Bimbingan Konseling"],
                            ["nama" => "Sejarah"],
                            ["nama" => "Penjaskes"],
                        ],
                    'hobi' => [
                            ["nama" => "Mendengarkan Musik"],
                            ["nama" => "Menari"],
                        ],
                    ],
                        [
                            'nama' => "Indah Rianti",
                            'matkul' => [
                            ["nama" => "PPKN"],
                            ["nama" => "Al-Quran"],
                            ["nama" => "Bahasa Sunda"],
                            ],
                            'hobi' => [
                            ["nama" => "Menulis"],
                            ["nama" => "Bermain Alat Musik"],
                        ],
                    ],
                    [
                        'nama' => "Anggi Fitria",
                        'matkul' => [
                        ["nama" => "RPL"],
                        ["nama" => "TKJ"],
                        ["nama" => "OOP"],
                        ],
                        'hobi' => [
                        ["nama" => "Mengedit"],
                        ["nama" => "Fotografi"],
                    ],
                ],
                ]
            ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>
<body>
    <fieldset>
    <legend>Data Kuliah</legend>
    <table border = 1>

    <tr>
    <th>No</th>
    <th>Nama Mahasiswa</th>
    <th>Nama Dosen</th>
    <th>Mata Kuliah</th>
    <th>Hobi</th>
    </tr>

    <?php
    $no =1;
    foreach($data as $kuliah){
    foreach($kuliah['mahasiswa'] as $mahasiswa){
    ?>

    <tr>
    <td><?php echo $no++;?></td>
    <td><?php echo $mahasiswa['nama'];?></td>
    <td><?php echo $kuliah['dosen'];?></td>
    
    <?php echo "<td><ul>"; 
        foreach($mahasiswa['matkul'] as $matkul){
        ?>

        <li><?php echo $matkul['nama'];?> </li>
        <?php } echo "</td>
        <td></ul><ul>";?>

        <?php
        foreach($mahasiswa['hobi'] as $hobi){
            echo "<li>". $hobi['nama']. "</li>";
        }
        echo "<td></ul>";
    }
}
        ?>
    </ul></td>
    

    </tr>
    </table>
    </fieldset>
</body>
</html>
