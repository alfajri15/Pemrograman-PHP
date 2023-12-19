<?php 
    class Produk{
        private $dbh;
        public function __construct($dbh){
            $this->dbh = $dbh;
        }

        public function dataProduk(){
            $sql="SELECT * FROM produk";
            $rs = $this->dbh->query($sql);
            return $rs;
        }
        
        public function getAllJenis(){
            $sql = "SELECT * FROM jenis";
            // fungsi query, eksekusi query dan ambil datanya
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
