<?php

class MKategori {

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getKategoriAll()
    {
        $query = "SELECT * FROM tb_kategori";

        $this->db->query($query);
        
        return $this->db->resultSet();
    }

    public function tambahData($data)
    {
        $query = "INSERT INTO tb_kategori VALUES('', :nama_kategori)";

        $this->db->query($query);

        $this->db->bind('nama_kategori', $data['nama_kategori']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editData($data)
    {
        $query = "UPDATE tb_kategori SET nama_kategori= :nama_kategori WHERE id_kategori= :id_kategori";

        $this->db->query($query);

        $this->db->bind('id_kategori', $data['id_kategori']);
        $this->db->bind('nama_kategori', $data['nama_kategori']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusData($data)
    {
        $query = "DELETE FROM tb_kategori WHERE id_kategori= :id_kategori";

        $this->db->query($query);

        $this->db->bind('id_kategori', $data['id_kategori']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getKategori($data)
    {
        $kategori = $data['nama_kategori'];
        $query = "SELECT * FROM tb_kategori WHERE nama_kategori LIKE :nama_kategori";

        $this->db->query($query);
        
        $this->db->bind('nama_kategori', "%$kategori%");

        return $this->db->resultSet();
    }
}