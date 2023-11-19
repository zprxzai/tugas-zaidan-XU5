<?php
$hari = "hujan";
if ($hari =="hujan") {
    echo "saya bawa payung";
}
echo "<hr>";
$hari = "hujan";
if ($hari =="hujan") {
    echo "saya bawa payung";
} else {
    echo "saya tidak bawa payung";
}
echo "<hr>";

$nilai = 90;
if ($nilai >= 75 AND $nilai <= 100) {
echo "nilai anda $nilai, anda <b>lulus</b>";
} elseif ($nilai >= 0 AND $nilai <= 74) {
    echo "nilai anda $nilai, anda <b>tidak lulus</b>";
} else {
    echo "nilai anda $nilai, tidak ada ketentuan nilai seperti ini";
} 
echo "<hr>";

$nilai = 70;

if ($nilai > 91 AND $nilai <- 100):
     echo "nilai anda $nilai, nilai anda A"; 
 elseif ($nilai >= 83 AND $nilai < 91):
     echo "nilai anda $nilai, nilai anda B";
elseif ($nilai > 75 AND $nilai < 83) :
     echo "nilai anda $nilai, nilai anda C";
elseif ($nilai >= 0 AND $nilai < 75):
     echo "nilai anda $nilai, nilai anda D";

else: echo "nilai anda $nilai, Tidak penilaian seperti ini";
 endif;

    echo "<hr>";
    $hasil = "A";
    if ($hasil == "A") :
        echo "istimewa" ;
    elseif ($hasil == "B") :
        echo "baik" ;
     elseif ($hasil == "C") :
        echo "kurang" ;
     elseif ($hasil == "D") :
        echo "kurang" ;
        else :
            echo "tidak ada ketentuan seperti ini";
        endif; 
