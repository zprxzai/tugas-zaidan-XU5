<?php

# perulangan ini akan dilakukan selama nilai $i kurang dari 20.

$i = 0;
while ($i < 200) {
    echo "$i. belajar programming itu susah <br>";
    $i++;
}
$i = 0;
echo "<hr>";
$i = 20;
while ($i >= 1) {
    echo "$i. belajar programming itu susah <br>";
    $i--;
}
echo "<hr>";
echo "<h1>GENAP</h1>";
$i = 1;
do {
  echo $i;
  echo "<br>";
  $i+=2;
} while ($i <= 10);