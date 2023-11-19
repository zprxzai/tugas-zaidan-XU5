<?php
echo date('d-m-Y') . "<br>";

date_default_timezone_set("America/Los_Angeles") . '<br>';

echo date("d-m-Y H:i") . '<br>';

// ganti ke indonesia
date_default_timezone_set("Europe/Moscow") . '<br>';

echo date("d-m-Y H:i");
