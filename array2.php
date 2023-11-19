<?php
echo "<h3>array dimensi 2</h3>";
$nama = [
    ["  zaidan","p web", "laki laki","16"],
    ["  raditya","p web", "laki laki","15"],  
];
var_dump($nama);
echo"<br>";
echo $nama[1][1];

echo  "<h2>Array 2 dimensi - Array assosiatif</h2>";
$nilai =[
    "zaidan" => [
        "mtk" => 90,
        "ppkn" => 80,
        "fisika" => 85,
    ],
    "radit" => [
        "mtk" => 90,
        "ppkn" => 81,
        "fisika" => 80,
    ],
    ];
    var_dump($nilai);
    echo "<br>";
    echo $nilai["zaidan"]["ppkn"];
    echo "<BR>";
    echo '<pre>' . var_export($nilai, true) . '</pre>';
