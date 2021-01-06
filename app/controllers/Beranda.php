<?php

class Beranda extends Controller {

    public function __construct()
    {
        if($_SESSION['id_admin'] != 0)
        {
            // header('location: ' . BASE_URL .'login');
        }
    }

    // index

    public function index()
    {
        $data = array(
            'header1' => "Selamat Datang, Admin !",
            'header2' => "kelola perpustakaan dengan mudah menggunakan website ini.",

            'getBuku' => $this->model('MBeranda')->getBuku(),
            'getPeminjam' => $this->model('MBeranda')->getPeminjam(),
            'getKategori' => $this->model('MBeranda')->getKategori(),
        );
        $this->view('templates/header', $data);
        $this->view('beranda/Vberanda', $data);
        $this->view('templates/footer');
    }
}