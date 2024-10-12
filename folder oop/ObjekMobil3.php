<?php

require_once "Mobil3.php";

$mobilSatu = new Mobil3("Avanza", "Toyota");
$mobilSatu-> tahun = 2010;

$mobilDua = new Mobil3("Brio", null);
$mobilDua -> tahun = 2020;

echo $mobilSatu->infoMobil(). PHP_EOL;
echo $mobilDua->infoMobil();

?>