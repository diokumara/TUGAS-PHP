<?php 
    class Produk{
    private $dbh;
    public function __construct($dbh){
        $this->dbh = $dbh;
    }

    public function dataProduk(){
        $sql="SELECT * FROM Produk";
        $rs = $this->dbh->query($sql);
        return $rs;
    }
    
    public function getAllJenis(){
        $sql = "SELECT * FROM jenis_produk";
        // fungsi query, eksekusi query dan ambil datanya
        $rs = $this->dbh->query($sql); 
        return $rs;
        }
    }
?>