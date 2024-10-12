<?php
    class Mobil3{
        var String $nama;
        var ?string $merk;
        var int $tahun;
    
        public function __construct( String $nama, ?String $merk){
            $this->nama = $nama;
            $this->merk = $merk;
        }
    
        public function infoMobil(){
            return "$this->nama , $this->merk,$this->tahun;";
        }
    }
    ?>