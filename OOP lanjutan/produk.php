<?php
    class produk{
        // deklarasi variabel
        private String $nama;
        private int $price;

        // deklarasi construct
        function __construct(String $nama, int $price){
            $this->nama=$nama;
            $this->price=$price;
        }

        public function getNama() : String {
            return $this->nama;
        }

        public function getPrice() : int {
            return $this->price;
        }


    }
?>