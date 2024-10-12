<?php
    class Mobil{
        var String $nama;
        var String $brand;
        var int $tahun;

        // Buatlah function construct
        function __construct(String $nama, String $brand, int $tahun){
            $this->nama=$nama;
            $this->brand=$brand;
            $this->tahun=$tahun;
        }

        // Buatlah function info mobil
        function infoMobil(){
            return "Nama mobil : $this->nama" . PHP_EOL
            . "Brand : $this->brand" . PHP_EOL
            . "Tahun : $this->tahun" . PHP_EOL;
        }
    }
?>