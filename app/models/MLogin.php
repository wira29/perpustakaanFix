<?php

class MLogin {

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAdmin($data)
    {
        $query = "SELECT * FROM tb_login WHERE username= :username AND pass= :pass";

        $this->db->query($query);
        $this->db->bind('username', $data['username']);
        $this->db->bind('pass', SHA1($data['password']));

        return $this->db->resultSet();
    }
}