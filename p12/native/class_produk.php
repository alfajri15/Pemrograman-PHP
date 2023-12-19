<?php 
    class Produk{
        private $dbh;
        public function __construct($dbh){
            $this->dbh = $dbh;
        }
        
        public function getAllProduk(){
            $sql="SELECT * FROM produk";
            $rs = $this->dbh->query($sql);
            return $rs;
        }

        public function getAllJenis(){
            $sql="SELECT * FROM jenis";
            // prepare statement PDO
            $rs = $this->dbh->query($sql);
            return $rs;
        }

    }
?>
