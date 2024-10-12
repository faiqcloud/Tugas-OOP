<?php
//include class Mobil1.php
require_once "Mobil1.php";
//instalisasi variabel objek mobilSatu
$mobilSatu= new Mobil1();

//properties pada objek mobilsatu
$mobilSatu->nama = "Avanza";
$mobilSatu->merk = "Toyota";
$mobilSatu->warna = "Hitam";
$mobilSatu->tahun = 2019;
$mobilSatu->kecepatanMaksimal = 1300;

//menampiilkan informasi objek mobilsatu
echo "Nama : $mobilSatu->nama <br>";
echo "Merk : $mobilSatu->merk <br>";
echo "Warna : $mobilSatu->warna <br>";
echo "Tahun : $mobilSatu->tahun <br>";
echo "Kecepatan Maksimal : $mobilSatu->kecepatanMaksimal <br>";

//membuat objek mobilDua
$mobilDua = new Mobil1();

//menambahkan properties pada objek mobilDua
$mobilDua->nama = "Brio";
$mobilDua->merk = "Honda";
$mobilDua->warna = "Merah";
$mobilDua->tahun = 2018;
$mobilDua->kecepatanMaksimal = 1000;

//menampilkan informasi objek mobilDua
var_dump($mobilDua);
?>