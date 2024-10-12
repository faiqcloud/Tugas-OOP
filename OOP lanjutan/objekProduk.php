<?php
    // include class produk.php
    require_once "produk.php";
    require_once "produkTurunan.php";

    $produk = new produk("Apple", 20000);
    
    // Menampilkan info nama dan price
    echo $produk->getNama() . PHP_EOL;
    echo $produk->getPrice() . PHP_EOL;

    $produk2 = new produkTurunan("Nanas Muda", 30000);
    $produk2->info();
?>