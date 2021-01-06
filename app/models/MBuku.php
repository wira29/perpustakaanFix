<?php

class MBuku {

    public function __construct()
    {
        $this->db = new Database;
    }

    public function hitungBuku()
    {
        $this->db->query("SELECT COUNT(id_buku) as jumlah_buku FROM tb_buku");
        $jumlah = $this->db->resultSet();
        return $jumlah[0]['jumlah_buku'];
    }

    public function getKategori()
    {
        $this->db->query("SELECT * FROM tb_kategori");
        return $this->db->resultSet();
    }

    public function getBukuAll($awal, $limit)
    {
        $this->db->query("SELECT * FROM tb_buku LIMIT $awal, $limit");
        return $this->db->resultSet();
    }

    public function tambahData($data)
    {
        $ekstensi_diperbolehkan	= array('png','jpg');
		$gambar = 'file'.$_FILES['gambar']['name'];
		$x = explode('.', $gambar);
		$ekstensi = strtolower(end($x));
		$ukuran	= $_FILES['gambar']['size'];
        $file_tmp = $_FILES['gambar']['tmp_name'];
        if(empty($_FILES['gambar']['name']))
        {
            $query = "INSERT INTO tb_buku
                    VALUES
                    (null, :kategori, :kode_buku, :nama_buku,  :penulis, :gambar)";

                    $this->db->query($query);

                    $this->db->bind('kode_buku', $data['kode_buku']);
                    $this->db->bind('kategori', $data['kategori']);
                    $this->db->bind('nama_buku', $data['nama_buku']);
                    $this->db->bind('penulis', $data['penulis']);
                    $this->db->bind('gambar', 'gambarKosong.png');

                    $this->db->execute();
                    return $this->db->rowCount();
        }
        else{
            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                if($ukuran < 1044070){			
                    $pindah = move_uploaded_file($file_tmp, 'assets/img/'. $gambar);
                    
                    $query = "INSERT INTO tb_buku
                    VALUES
                    (null, :kategori, :kode_buku , :nama_buku,  :penulis, :gambar)";

                    $this->db->query($query);

                    $this->db->bind('kode_buku', $data['kode_buku']);
                    $this->db->bind('kategori', $data['kategori']);
                    $this->db->bind('nama_buku', $data['nama_buku']);
                    $this->db->bind('penulis', $data['penulis']);
                    $this->db->bind('gambar', $gambar);

                    $this->db->execute();

                    

                    if($query && $pindah){
                        return $this->db->rowCount();
                    }else{
                        $gagal =  'GAGAL MENGUPLOAD GAMBAR';
                        return $gagal;
                    }
                }else{
                    $gagal = 'UKURAN FILE TERLALU BESAR';
                    return $gagal;
                }
            }else{
                $gagal = 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
                return $gagal;
            }
            
        }
        
        
    }

    public function editData($data)
    {
        $ekstensi_diperbolehkan	= array('png','jpg');
		$gambar = 'file'.$_FILES['gambar']['name'];
		$x = explode('.', $gambar);
		$ekstensi = strtolower(end($x));
		$ukuran	= $_FILES['gambar']['size'];
        $file_tmp = $_FILES['gambar']['tmp_name'];
        if(empty($_FILES['gambar']['name']))
        {
            $query = "UPDATE tb_buku SET
                    id_kategori = :kategori,
                    kode_buku = :kode_buku,
                    nama_buku = :nama_buku,
                    penulis = :penulis
                    WHERE id_buku = :id_buku";

                    $this->db->query($query);

                    $this->db->bind('kategori', $data['kategori']);
                    $this->db->bind('kode_buku', $data['kode_buku']);
                    $this->db->bind('nama_buku', $data['nama_buku']);
                    $this->db->bind('penulis', $data['penulis']);
                    $this->db->bind('id_buku', $data['id_buku']);

                    $this->db->execute();
                    return $this->db->rowCount();
        }
        else{
            if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
                if($ukuran < 1044070){			
                    $pindah = move_uploaded_file($file_tmp, 'assets/img/'. $gambar);
                    
                    $query = "UPDATE tb_buku
                    SET
                    id_kategori=:kategori, kode_buku=:kode_buku, nama_buku=:nama_buku,  penulis=:penulis, gambar=:gambar
                    WHERE id_buku=:id_buku";

                    $this->db->query($query);

                    $this->db->bind('kategori', $data['kategori']);
                    $this->db->bind('kode_buku', $data['kode_buku']);
                    $this->db->bind('nama_buku', $data['nama_buku']);
                    $this->db->bind('penulis', $data['penulis']);
                    $this->db->bind('gambar', $gambar);
                    $this->db->bind('id_buku', $data['id_buku']);

                    $this->db->execute();

                    

                    if($query && $pindah){
                        return $this->db->rowCount();
                    }else{
                        $gagal =  'GAGAL MENGUPLOAD GAMBAR';
                        return $gagal;
                    }
                }else{
                    $gagal = 'UKURAN FILE TERLALU BESAR';
                    return $gagal;
                }
            }else{
                $gagal = 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
                return $gagal;
            }
            
        }
        
        
    }

    public function hapusData($data)
    {
        $query = "DELETE FROM tb_buku
                WHERE id_buku=:id_buku";

        $this->db->query($query);
        $this->db->bind('id_buku', $data['id_buku']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getBuku($data)
    {
        $nama = $data['nama'];
        $buku = $data['buku'];
        $kategori = $data['kategori'];

        if($kategori != 0)
        {
            $query = "SELECT * FROM tb_buku WHERE (id_kategori= :kategori) AND (nama_buku LIKE :buku) AND (penulis LIKE :penulis)";

            $this->db->query($query);

            $this->db->bind('buku', "%$buku%");
            $this->db->bind('penulis', "%$nama%");
            $this->db->bind('kategori', $kategori);
        }else{
            $query = "SELECT * FROM tb_buku WHERE nama_buku LIKE :nama AND penulis LIKE :penulis";

            $this->db->query($query);

            $this->db->bind('nama', "%$buku%");
            $this->db->bind('penulis', "%$nama%");
        }

        

        return $this->db->resultSet();
    }
}