<?php
    class Mobil2{
        var ? String $nama = "Avanza";
        var String $merk;
        var ? String $warna = null;
        var int $tahun;
        var int $kecepatanMaksimal;
    
        function tambahKecepatan(){
            echo "Kecepatan bertambah!";
        }
    
        function infoMobil(? String $nama){
            if(is_null($nama)){
                echo "Nama mobil adalah {$this->nama}" . PHP_EOL;
            }
            else{
                echo "Mobil anda adalah $nama" . PHP_EOL;
            }
        }
    
        const AUTHOR = "Faiq0060";
    }
    ?>