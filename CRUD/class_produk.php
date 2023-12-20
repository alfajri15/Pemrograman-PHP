<?php 
    class Produk{
        private $dbh;
        public function __construct($dbh){
            $this->dbh = $dbh;
        }
        
        public function getAllProduk(){
            $sql = "SELECT * FROM produk";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute();
            $rs = $ps->fetchAll();
            return $rs;
        }

        public function getAllJenis(){
            $sql="SELECT * FROM jenis";
            // prepare statement PDO
            $rs = $this->dbh->query($sql);
            return $rs;
        }

        public function simpan($data){
            $sql = "INSERT INTO produk(kode,nama,kondisi,harga,stok,idjenis,foto)
                    VALUES (?,?,?,?,?,?,?)";
            // prepare statement PDO
            $ps = $this->dbh->prepare($sql); 
            $ps->execute($data);
        }

    }
?>
