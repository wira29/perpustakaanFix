<?php

class MPengaturan {

    public function __construct()
    {
        $this->db = new Database;
    }

    public function hapusSemua()
    {
        $this->db->truncate('tb_buku');
        $this->db->truncate('tb_kategori');
        $this->db->truncate('tb_peminjam');

        return $this->db->rowCount();
    }

    public function getUser()
    {
        $this->db->query('SELECT * FROM tb_login');

        return $this->db->resultSet();
    }

    public function editData($data)
    {
        $query = "UPDATE tb_login SET username= :username, pass= :pass WHERE id= :id";

        $this->db->query($query);

        $this->db->bind('username', $data['username']);
        $this->db->bind('pass', SHA1($data['password']) );
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

}