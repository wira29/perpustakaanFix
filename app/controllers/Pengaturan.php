<?php

class Pengaturan extends Controller {

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
            'header1' => "Pengaturan",
            'header2' => "Atur data admin di halaman ini.",

            'user'      => $this->model('MPengaturan')->getUser()
        );
        $this->view('templates/header', $data);
        $this->view('pengaturan/Vpengaturan', $data);
        $this->view('templates/footer');
    }

    public function hapusSemua()
    {
        $hapus = $this->model('MPengaturan')->hapusSemua();

        if ($hapus == 0) {
            Flasher::setFlash("Berhasil", "Menghapus Semua Data", "success");

            header('Location: '. BASE_URL . 'pengaturan');
            exit;
        }else{
            Flasher::setFlash("Gagal", "Menghapus Semua Data", "danger");

            header('Location: '. BASE_URL . 'pengaturan');
            exit;
        }
    }

    public function editData()
    {
        $edit = $this->model('MPengaturan')->editData($_POST);
        // echo $edit;
        if ($edit > 0) {
            Flasher::setFlash("Berhasil", "Mengedit Data", "success");

            header('Location: '. BASE_URL . 'pengaturan');
            exit;
        }else{
            Flasher::setFlash("Gagal", "Mengedit Data", "danger");

            header('Location: '. BASE_URL . 'pengaturan');
            exit;
        }
    }
}