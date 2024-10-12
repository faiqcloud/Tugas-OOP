<?php
    interface HasBrand{
        function getBrand() : String;
    }

    interface isMaintenance{
        function isMaintenance() : bool;
    }

    interface Car extends HasBrand{
        function drive() : void;

        function getTire() : int;
    }

    // Implementasi interface pada class child
    class Avanza implements Car, isMaintenance{
        public function drive() : void{
            echo "Drive avanza" . PHP_EOL;
        }

        public function getTire() : int{
            return 4;
        }

        public function getBrand() : String{
            return "Toyota";
        }

        public function isMaintenance() : bool{
            return false;
        }
    }
?>