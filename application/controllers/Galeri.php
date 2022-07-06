<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function video()
    {
        $this->load->view('template/header.php');
        $this->load->view('menu-galeri/video.php');
        $this->load->view('template/footer.php');
    }

    public function penghargaan()
    {
        $this->load->view('template/header.php');
        $this->load->view('menu-galeri/penghargaan.php');
        $this->load->view('template/footer.php');
    }

    public function foto()
    {
        $this->load->view('template/header.php');
        $this->load->view('menu-galeri/foto.php');
        $this->load->view('template/footer.php');
    }
}
?>