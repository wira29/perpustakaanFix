<?php

class Terlambat extends Controller {

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
            'header1' => "Data Terlambat",
            'header2' => "halaman ini berisi kumpulan siswa yang terlambat mengembalikan buku.",

            'getDataTerlambat' => $this->model('MTerlambat')->getTerlambat(),
            'getBuku'      =>  $this->model('MTerlambat')->getBuku()
        );

        $this->view('templates/header',$data);
        $this->view('terlambat/Vterlambat',$data);
        $this->view('templates/footer');
    }

    public function hapusData()
    {
        $hapus = $this->model('MTerlambat')->hapusData($_POST);
        if ($hapus > 0) {
            Flasher::setFlash("Berhasil", "Menghapus Peminjaman", "success");

            header('Location: '. BASE_URL . 'terlambat');
            exit;
        }else{
            Flasher::setFlash("Gagal", "Menghapus Peminjaman", "danger");

            header('Location: '. BASE_URL . 'terlambat');
            exit;
        }
    }

    public function cari()
    {
        $data = array(
            'header1' => "Data Terlambat",
            'header2' => "halaman ini berisi kumpulan siswa yang terlambat mengembalikan buku.",

            'getDataTerlambat' => $this->model('MTerlambat')->getTerlambatCari($_POST),
            'getBuku'      =>  $this->model('MTerlambat')->getBuku()
        );

        $this->view('templates/header',$data);
        $this->view('terlambat/Vterlambat',$data);
        $this->view('templates/footer');
    }

    public function exportExcel()
    {
        $data = $this->model('MTerlambat')->getTerlambat();

        $this->view('terlambat/export_excel', $data);
    }

    public function print()
    {
        $data = $this->model('MTerlambat')->getTerlambat();

        $this->view('terlambat/print', $data);
    }
}