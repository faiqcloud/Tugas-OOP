<?php
    class produkTurunan extends produk{
       // deklarasi variabel
       private String $nama;
       private int $price;

        public function info(){
            echo "Nama : " . $this->nama . PHP_EOL;
            echo "Price : " . $this->price . PHP_EOL;
        }
        
        
    }
?>