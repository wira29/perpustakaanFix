<?php

class Kategori extends Controller {

    public function __construct()
    {
        if(!isset($_SESSION['id_admin']))
        {
            header('Location: ' . BASE_URL .'login');
        }
    }

    public function index()
    {
        $data = array(
            'header1' => "Kategori",
            'header2' => "kelola buku perpustakaan di halaman ini.",

            'kategoriAll' => $this->model('MKategori')->getKategoriAll(),
        );
        $this->view('templates/header',$data);
        $this->view('kategori/Vkategori', $data);
        $this->view('templates/footer');
    }

    public function tambahData()
    {
        $tambah = $this->model('MKategori')->tambahData($_POST);
        
        if ($tambah > 0) {
            Flasher::setFlash("Berhasil", "Menambahkan Kategori", "success");

            header('Location: '. BASE_URL . 'kategori');
            exit;
        }else{
            Flasher::setFlash("Gagal", $tambah, "danger");

            header('Location: '. BASE_URL . 'kategori');
            exit;
        }

        
    }

    public function editData()
    {
        $edit = $this->model('MKategori')->editData($_POST);
        
        if ($edit > 0) {
            Flasher::setFlash("Berhasil", "Mengedit Kategori", "success");

            header('Location: '. BASE_URL . 'kategori');
            exit;
        }else{
            Flasher::setFlash("Gagal", $edit, "danger");

            header('Location: '. BASE_URL . 'kategori');
            exit;
        }

        
    }

    public function hapusData()
    {
        $hapus = $this->model('MKategori')->hapusData($_POST);
        echo $hapus."Aa";
        if ($hapus > 0) {
            Flasher::setFlash("Berhasil", "Menghapus Kategori", "success");

            header('Location: '. BASE_URL . 'kategori');
            exit;
        }else{
            Flasher::setFlash("Gagal", "Menghapus Kategori", "danger");

            header('Location: '. BASE_URL . 'kategori');
            exit;
        }
    }

    public function cari()
    {
        $data = array(
            'header1' => "Kategori",
            'header2' => "kelola buku perpustakaan di halaman ini.",

            'kategoriAll' => $this->model('MKategori')->getKategori($_POST),
        );
        $this->view('templates/header',$data);
        $this->view('kategori/Vkategori', $data);
        $this->view('templates/footer');
    }
}