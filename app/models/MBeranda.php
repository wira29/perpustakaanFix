<?php

class MBeranda {
    private $table = "tb_login";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getBuku()
    {
        $this->db->query("SELECT COUNT(id_buku) as jumlahBuku FROM tb_buku");
        
        return $this->db->resultSet();
    }

    public function getPeminjam()
    {
        $this->db->query("SELECT COUNT(id_peminjam) as jumlahPeminjam FROM tb_peminjam");
        
        return $this->db->resultSet();
    }

    public function getKategori()
    {
        $this->db->query("SELECT COUNT(id_kategori) as jumlahKategori FROM tb_kategori");
        
        return $this->db->resultSet();
    }
}