<?php 

$kuliah = [
    [
        'dosen' => "Aceng Fikri",
        'mahasiswa' => [
            [
                'nama' => "Anisa",
                'matkul' => [
                        ["nama" => "Bahasa Indonesia"],
                        ["nama" => "Bahasa Inggris"],
                        ["nama" => "Matematika"],
                    ],
                'hobi' => [
                        ["nama" => "Membaca"],
                        ["nama" => "Menulis"],
                    ],
                ],
                    [
                        'nama' => "Astri",
                        'matkul' => [
                        ["nama" => "Bahasa Sunda"],
                        ["nama" => "PAI"],
                        ["nama" => "PPKN"],
                        ],
                        'hobi' => [
                        ["nama" => "Menonton"],
                        ["nama" => "Menggambar"],
                    ],
                ],
                [
                    'nama' => "Putri",
                    'matkul' => [
                    ["nama" => "IPA"],
                    ["nama" => "IPS"],
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
                    'nama' => "Alya",
                    'matkul' => [
                            ["nama" => "Fisika"],
                            ["nama" => "Kimia"],
                            ["nama" => "Penjaskes"],
                        ],
                    'hobi' => [
                            ["nama" => "Mendengarkan Musik"],
                            ["nama" => "Menari"],
                        ],
                    ],
                        [
                            'nama' => "Indah",
                            'matkul' => [
                            ["nama" => "BK"],
                            ["nama" => "Al-Quran"],
                            ["nama" => "Bahasa Sunda"],
                            ],
                            'hobi' => [
                            ["nama" => "Memasak"],
                            ["nama" => "Bermain Alat Musik"],
                        ],
                    ],
                    [
                        'nama' => "Anggi",
                        'matkul' => [
                        ["nama" => "RPL"],
                        ["nama" => "TKJ"],
                        ["nama" => "OOP"],
                        ],
                        'hobi' => [
                        ["nama" => "Bermain Game"],
                        ["nama" => "Fotografi"],
                    ],
                ],
                ]
            ]
];

$no = 1;

foreach ($kuliah as $data) {
    //echo $key
    echo "Nama Wali Dosen : ". $data['dosen']. "<br>";
    echo "Daftar Mahasiswa : ";
    echo "<ul>";

    foreach($data['mahasiswa'] as $mahasiswa){
        echo "<li> Data Ke- ". $no++. "<br>";
        echo "Nama Mahasiswa : " . $mahasiswa['nama'];
        echo "<br>Daftar Mata Kuliah : ";

        echo "<ol>";
        foreach($mahasiswa['matkul'] as $matkul){
            echo "<li>" .$matkul['nama']. "</li>";
        }
        echo "</ol>";

            echo "Daftar Hobi : ";
            echo "<ol>";
        foreach($mahasiswa['hobi'] as $hobi){
            echo "<li>" .$hobi['nama']. "</li>";
        }
        echo "</ol>";
    }
    echo "</ul>";
}

?>