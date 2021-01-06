<?php

class Peminjam extends Controller {

    public function __construct()
    {
        if(!isset($_SESSION['id_admin']))
        {
            header('Location: ' . BASE_URL .'Login');
        }
    }

    public function index()
    {
        $data = array(
            'header1' => "Data Peminjam",
            'header2' => "halaman ini berisi kumpulan data peminjam.",

            'dataPeminjam' => $this->model('MPeminjam')->getPeminjamAll(),
            'dataPeminjamJson' => json_encode($this->model('MPeminjam')->getPeminjamAll()),
            'getKategori'  => $this->model('MPeminjam')->getKategori(),
            'getBukuAll'   => $this->model('MPeminjam')->getBukuAll()
        );

        $this->view('templates/header',$data);
        $this->view('peminjam/Vpeminjam',$data);
        $this->view('templates/footer');
    }

    public function tambahData()
    {
        $tambah = $this->model('MPeminjam')->tambahData($_POST);
        
        if ($tambah > 0) {
            Flasher::setFlash("Berhasil", "Menambahkan Peminjaman", "success");

            header('Location: '. BASE_URL . 'Peminjam');
            exit;
        }else{
            Flasher::setFlash("Gagal", $tambah, "danger");

            header('Location: '. BASE_URL . 'Peminjam');
            exit;
        }

        
    }

    public function editData()
    {
        $edit = $this->model('MPeminjam')->editData($_POST);
        echo json_encode($edit);
        
        if ($edit > 0) {
            Flasher::setFlash("Berhasil", "Mengedit Peminjaman", "success");

        }else{
            Flasher::setFlash("Gagal", $edit, "danger");

        }

    }

    public function hapusData()
    {
        $hapus = $this->model('MPeminjam')->hapusData($_POST);
        echo $hapus."Aa";
        if ($hapus > 0) {
            Flasher::setFlash("Berhasil", "Menghapus Peminjaman", "success");

            header('Location: '. BASE_URL . 'Peminjam');
            exit;
        }else{
            Flasher::setFlash("Gagal", "Menghapus Peminjaman", "danger");

            header('Location: '. BASE_URL . 'Peminjam');
            exit;
        }
    }

    public function getUbah()
    {
        $ubah = $this->model('MPeminjam')->getUbah($_POST['id_peminjam']);

        echo json_encode($ubah);
    }

    public function cari()
    {
        $data = array(
            'header1' => "Data Peminjam",
            'header2' => "halaman ini berisi kumpulan data peminjam.",

            'dataPeminjam' => $this->model('MPeminjam')->getPeminjamCari($_POST),
            // 'dataPeminjamJson' => json_encode($this->model('MPeminjam')->getPeminjamAll()),
            'getKategori'  => $this->model('MPeminjam')->getKategori(),
            'getBukuAll'   => $this->model('MPeminjam')->getBukuAll()
        );

        $this->view('templates/header',$data);
        $this->view('peminjam/Vpeminjam',$data);
        $this->view('templates/footer');

        // var_dump($_POST);
    }

    public function exportExcel()
    {
        $data = $this->model('MPeminjam')->getPeminjamAll();

        $this->view('peminjam/export_excel', $data);
    }

    public function print()
    {
        $data = $this->model('MPeminjam')->getPeminjamAll();

        $this->view('peminjam/print', $data);
    }
}