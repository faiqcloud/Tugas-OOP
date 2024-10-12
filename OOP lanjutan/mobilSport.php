<?php
    require_once "Mobil.php";
    class mobilSport extends Mobil{
        public $turbo = false;

        // Membuat function jalankan turbo
        function jalankanTurbo(){
            $this->turbo=true;
            return "jalankan Turbo!";
        }

        function infoMobil(){
            return "Nama mobil : $this->nama" . PHP_EOL
            . "Brand : $this->brand" . PHP_EOL
            . "Tahun : " . $this->tahun . PHP_EOL
            . "Turbo : " . $this->turbo=true . PHP_EOL;
        }
    }
?>