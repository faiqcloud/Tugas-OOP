<?php
    // Include class mobil.php dan mobilsport.php
    require_once "Mobil.php";
    require_once "mobilSport.php";

    // Membuat objek dari class mobil
    $avanza = new Mobil("Avanza","Toyota", 2020);
    echo $avanza->infoMobil();

    // Membuat objek dari class mobil sport
    $supra = new mobilSport("Supra", "Toyota", 2021);
    echo $supra->infoMobil();
    echo $supra->jalankanTurbo();
?>