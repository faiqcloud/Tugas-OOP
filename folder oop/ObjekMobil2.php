<?php
    //include class Mobil2.php
    require_once "Mobil2.php";
    //instalisasi variabel objek mobilSatu
    $mobilSatu= new Mobil2();

    //properties pada objek mobilsatu
    $mobilSatu->nama = "Avanza";
    $mobilSatu->merk = "Toyota";
    $mobilSatu->warna = "Hitam";
    $mobilSatu->tahun = 2019;
    $mobilSatu->kecepatanMaksimal = 1300;

    echo "Nama : $mobilSatu->nama" . PHP_EOL;
    echo "Merk : $mobilSatu->merk" . PHP_EOL;
    echo "Warna : $mobilSatu->warna" . PHP_EOL;
    echo "Tahun : $mobilSatu->tahun" . PHP_EOL;
    echo "Kecepatan Maksimal : $mobilSatu->kecepatanMaksimal" . PHP_EOL;
    
    $mobilSatu->tambahKecepatan();
    $mobilSatu->infoMobil(null);

    echo Mobil2 :: AUTHOR;
?>