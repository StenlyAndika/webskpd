<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Penghargaan_model', 'penghargaan');
        $this->load->model('Foto_model', 'foto');
    }

    public function video()
    {
        $this->load->view('template/header.php');
        $this->load->view('menu-galeri/video.php');
        $this->load->view('template/footer.php');
    }

    public function penghargaan()
    {
        $data['penghargaan'] = $this->penghargaan->getAllPenghargaan();
        $this->load->view('template/header.php');
        $this->load->view('menu-galeri/penghargaan.php', $data);
        $this->load->view('template/footer.php');
    }

    public function foto()
    {
        $data['foto'] = $this->foto->getAllFoto();
        $this->load->view('template/header.php');
        $this->load->view('menu-galeri/foto.php', $data);
        $this->load->view('template/footer.php');
    }
}
?>