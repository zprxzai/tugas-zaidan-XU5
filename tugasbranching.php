<?php
$nilai = 90;
if ( $nilai > 81 AND $nilai <= 100):
     echo "nilai anda $nilai, nilai anda A, bobot anda 4"; 
elseif ($nilai >= 78 AND $nilai < 80):
     echo "nilai anda $nilai, nilai anda A-, bobot anda 3.7";
elseif ($nilai > 75 AND $nilai < 77) :
     echo "nilai anda $nilai, nilai anda B+, bobot anda 3.3";
elseif ($nilai >= 70 AND $nilai < 74):
     echo "nilai anda $nilai, nilai anda B, bobot anda 3";
elseif ($nilai >= 65 AND $nilai < 69):
     echo "nilai anda $nilai, nilai anda B-, bobot anda 2.7";
elseif ($nilai >= 60 AND $nilai < 64):
     echo "nilai anda $nilai, nilai anda c+, bobot anda 2.3";
elseif ($nilai >= 55 AND $nilai < 59):
     echo "nilai anda $nilai, nilai anda C-, bobot anda 2";
elseif ($nilai >= 40 AND $nilai < 54):
     echo "nilai anda $nilai, nilai anda D, bobot anda 1";
elseif ($nilai >= 0 AND $nilai < 39):
     echo "nilai anda $nilai, nilai anda E, bobot anda 0";
else : echo "nilai anda = $nilai, nilai anda A<br>";
endif;
