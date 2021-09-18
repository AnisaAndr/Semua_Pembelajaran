<?php 

$menu = [
    [
        "nama" => "Beranda",
        "subMenu" => [
            [
                "nama" => "Olahraga",
                "subMenu" => [
                    [
                        "nama" => "Bola",
                    ],
                    [
                        "nama" => "Bulu Tangkis",
                    ],
                ],
            ],
            [
                "nama" => "Politik",
                "subMenu" => [
                    [
                        "nama" => "Portal Banteng",
                    ],
                    [
                        "nama" => "Ekonomi",
                    ],
                ],
            ],
            [
                "nama" => "Manca Negara",
                "subMenu" => [
                    [
                    "nama" => "Internasional",
                ],
                [
                    "nama" => "World",
                ],
            ],
        ],
    ],
],

[
    "nama" => "Tentang",
    "subMenu" => [
        [
            "nama" => "Olahraga",
            "subMenu" => [
                [
                    "nama" => "Bola",
                ],
                [
                    "nama" => "Bulu Tangkis",
                ],
            ],
        ],
        [
            "nama" => "Politik",
            "subMenu" => [
                [
                    "nama" => "Portal Banteng",
                ],
                [
                    "nama" => "Ekonomi",
                ],
            ],
        ],
        [
            "nama" => "Manca Negara",
            "subMenu" => [
                [
                "nama" => "Internasional",
            ],
            [
                "nama" => "World",
            ],
        ],
    ],
    ],
],

[
    "nama" => "Berita",
    "subMenu" => [
        [
            "nama" => "Olahraga",
            "subMenu" => [
                [
                    "nama" => "Bola",
                ],
                [
                    "nama" => "Bulu Tangkis",
                ],
            ],
        ],
        [
            "nama" => "Politik",
            "subMenu" => [
                [
                    "nama" => "Portal Banteng",
                ],
                [
                    "nama" => "Ekonomi",
                ],
            ],
        ],
        [
            "nama" => "Manca Negara",
            "subMenu" => [
                [
                "nama" => "Internasional",
            ],
            [
                "nama" => "World",
            ],
        ],
    ],
],
],

];

foreach ($menu as $val) {
    //echo $key
    echo $val['nama']. "<br>";
    echo "<ul>";

    foreach($val['subMenu'] as $menu){
        echo "<li>" . $menu['nama']. "</li>";

        echo "<ol>";
        foreach($menu['subMenu'] as $sub){
            echo "<li>" .$sub['nama']. "</li>";
        }
        echo "</ol>";
    }
    echo "</ul>";
}

?>