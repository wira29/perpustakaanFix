<?php

class MTerlambat {

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getBuku()
    {
        $this->db->query("SELECT * FROM tb_buku");

        return $this->db->resultSet();
    }

    public function getTerlambat()
    {
        $query = "SELECT *, tb_peminjam.kode_buku as kode from tb_peminjam
                JOIN tb_buku ON tb_peminjam.id_buku = tb_buku.id_buku
                WHERE DAY(tgl_mengembalikan) < DAY(now()) AND MONTH(tgl_mengembalikan) <= MONTH(now()) AND YEAR(tgl_mengembalikan) <= YEAR(now())";

        $this->db->query($query);

        return $this->db->resultSet();
    }

    public function hapusData($data)
    {
        $query = "DELETE FROM tb_peminjam WHERE id_peminjam= :id_peminjam";

        $this->db->query($query);

        $this->db->bind('id_peminjam', $data['id_peminjam']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getTerlambatCari($data)
    {
        $nama = $data['nama'];
        $kelas = $data['kelas'];
        $buku = $data['id_buku'];
        
        if($buku != 0)
        {
            $query = "SELECT * FROM tb_peminjam
                JOIN tb_buku ON tb_peminjam.id_buku = tb_buku.id_buku
                WHERE nama LIKE :nama AND kelas LIKE :kelas AND tb_peminjam.id_buku= :id_buku
                AND DAY(tgl_mengembalikan) < DAY(now()) AND MONTH(tgl_mengembalikan) <= MONTH(now()) AND YEAR(tgl_mengembalikan) <= YEAR(now())";

                $this->db->query($query);
                $this->db->bind('nama', "%$nama%");
                $this->db->bind('kelas', "%$kelas%");
                $this->db->bind('id_buku', $buku);
        }else{
            $query = "SELECT * FROM tb_peminjam
                JOIN tb_buku ON tb_peminjam.id_buku = tb_buku.id_buku
                WHERE nama LIKE :nama AND kelas LIKE :kelas
                AND DAY(tgl_mengembalikan) < DAY(now()) AND MONTH(tgl_mengembalikan) <= MONTH(now()) AND YEAR(tgl_mengembalikan) <= YEAR(now())";

                $this->db->query($query);
                $this->db->bind('nama', "%$nama%");
                $this->db->bind('kelas', "%$kelas%");
        }


        return $this->db->resultSet();
    }
}