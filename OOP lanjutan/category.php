<?php
    class category{
        private String $nama;
        private bool $expensive;
        
        public function getNama() : String{
            return $this->nama;
        }
        
        public function setNama(String $nama) : void{
            $this->nama=$nama;
        }

        public function isExpensive() : bool{
            return $this->expensive;
        }
        
        public function setExpensive(bool $expensive) : void {
            $this->expensive=$expensive;
        }


    }
?>