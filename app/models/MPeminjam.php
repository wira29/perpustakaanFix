<?php

class MPeminjam {

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getKategori()
    {
        $this->db->query("SELECT * FROM tb_kategori");
        return $this->db->resultSet();
    }

    public function getBukuAll()
    {
        $query = "SELECT * FROM tb_buku";

        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getPeminjamAll()
    {
        $query = "SELECT *, tb_peminjam.kode_buku as kode FROM tb_peminjam
                JOIN tb_buku ON tb_peminjam.id_buku = tb_buku.id_buku";

        $this->db->query($query);
        
        return $this->db->resultSet();
    }

    public function getPeminjamCari($data)
    {
        $nama = $data['nama'];
        $id_buku = $data['id_buku'];
        $tanggal = $data['tanggal'];
        if($id_buku == '0'){
            $query = "SELECT * FROM tb_peminjam
                JOIN tb_buku ON tb_peminjam.id_buku = tb_buku.id_buku
                WHERE nama LIKE :nama AND tgl_pinjam LIKE :tanggal";

            $this->db->query($query);

            $this->db->bind('nama', "%$nama%");
            $this->db->bind('tanggal', "%$tanggal%");
        }else{
            $query = "SELECT * FROM tb_peminjam
                JOIN tb_buku ON tb_peminjam.id_buku = tb_buku.id_buku
                WHERE nama LIKE :nama AND tgl_pinjam LIKE :tanggal AND tb_peminjam.id_buku= :id_buku";

            $this->db->query($query);

            $this->db->bind('nama', "%$nama%");
            $this->db->bind('tanggal', "%$tanggal%");
            $this->db->bind('id_buku', $id_buku);
        }
        
        
        return $this->db->resultSet();
    }

    public function tambahData($data)
    {
        $query = "INSERT INTO tb_peminjam VALUES(null, :kode_buku, :nama, :kelas, :id_buku, :tgl_pinjam, :tgl_mengembalikan)";

        $this->db->query($query);

        $this->db->bind('kode_buku', $data['kode_buku']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('id_buku', $data['id_buku']);
        $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);
        $this->db->bind('tgl_mengembalikan', $data['tgl_mengembalikan']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function editData($data)
    {
        $query = "UPDATE tb_peminjam SET
        kode_buku= :kode_buku, 
        nama= :nama,
        kelas= :kelas,
        id_buku= :id_buku,
        tgl_pinjam= :tgl_pinjam,
        tgl_mengembalikan= :tgl_mengembalikan
        WHERE id_peminjam= :id_peminjam";

        $this->db->query($query);

        $this->db->bind('id_peminjam', $data['id_peminjam']);
        $this->db->bind('kode_buku', $data['kode_buku']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('id_buku', $data['id_buku']);
        $this->db->bind('tgl_pinjam', $data['tgl_pinjam']);
        $this->db->bind('tgl_mengembalikan', $data['tgl_mengembalikan']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusData($data)
    {
        $query = "DELETE FROM tb_peminjam WHERE id_peminjam= :id_peminjam";

        $this->db->query($query);

        $this->db->bind('id_peminjam', $data['id_peminjam']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getUbah($id_peminjam)
    {
        $query = "SELECT *, tb_peminjam.kode_buku as kode FROM tb_peminjam
                JOIN tb_buku ON tb_peminjam.id_buku = tb_buku.id_buku
                WHERE id_peminjam = :id_peminjam";
        $this->db->query($query);

        $this->db->bind('id_peminjam', $id_peminjam);

        return $this->db->resultSet();
    }
}