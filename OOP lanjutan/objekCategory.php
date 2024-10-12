<?php
    // include class nama category.php
    require_once "category.php";

    $objekCategory = new category();

    // Untuk instan variabel tidak lagi menggunakan seperti ini
    // $objekCategory->nama="handphone";

    $objekCategory->setNama("handphone");
    $objekCategory->setExpensive(True);

    // Mengakses data
    echo "Nama : {$objekCategory->getNama()}" . PHP_EOL;
    echo "Expensive : {$objekCategory->isExpensive()}" . PHP_EOL;
?>