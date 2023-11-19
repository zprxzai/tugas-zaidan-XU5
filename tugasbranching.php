<?php
$nilai = 90;
if ( $nilai > 81 AND $nilai <- 100):
     echo "nilai anda $nilai, nilai anda A"; 
 elseif ($nilai >= 78 AND $nilai < 80):
     echo "nilai anda $nilai, nilai anda A-";
elseif ($nilai > 75 AND $nilai < 77) :
     echo "nilai anda $nilai, nilai anda B+";
elseif ($nilai >= 70 AND $nilai < 74):
     echo "nilai anda $nilai, nilai anda B";
elseif ($nilai >= 65 AND $nilai < 69):
     echo "nilai anda $nilai, nilai anda B-";
elseif ($nilai >= 60 AND $nilai < 64):
     echo "nilai anda $nilai, nilai anda c+";
elseif ($nilai >= 55 AND $nilai < 59):
     echo "nilai anda $nilai, nilai anda C-";
elseif ($nilai >= 40 AND $nilai < 54):
     echo "nilai anda $nilai, nilai anda D";
elseif ($nilai >= 0 AND $nilai < 39):
     echo "nilai anda $nilai, nilai anda E";


else: echo "nilai anda $nilai";
 endif;
