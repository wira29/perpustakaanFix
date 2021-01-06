<?php

class Login extends controller {

    public function __construct()
    {
        if(isset($_SESSION['id_admin']))
        {
            header('location: ' . BASE_URL .'beranda');
        }
    }

    public function index()
    {
        $this->view('login/Vlogin');
    }

    public function masuk()
    {
        $masuk = $this->model('MLogin')->getAdmin($_POST);


        if(!empty($masuk))
        {
            Session::startSession($masuk[0]['id']);
            echo $_SESSION['id_admin'];
            header('location: ' . BASE_URL .'Beranda');
        }else{
            Flasher::setFlash('Gagal','Username atau Password Salah !','danger');
            header('Location: ' . BASE_URL .'login');
        }
    }

    public function keluar()
    {
        Session::destroySession();
        header('Location: ' . BASE_URL .'login');
    }
}