<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function anggaran()
    {
        $this->load->view('template/header.php');
        $this->load->view('menu-dokumen-daerah/anggaran.php');
        $this->load->view('template/footer.php');
    }

    public function rpjmd()
    {
        $this->load->view('template/header.php');
        $this->load->view('menu-dokumen-daerah/rpjmd.php');
        $this->load->view('template/footer.php');
    }

}
?>