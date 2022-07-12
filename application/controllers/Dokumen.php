<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('Rpjmd_model', 'rpjmd');
        $this->load->model('Anggaran_model', 'anggaran');
    }

    public function anggaran()
    {
        $data['anggaran'] = $this->anggaran->getAllAnggaranSort();
        $this->load->view('template/header.php');
        $this->load->view('menu-dokumen-daerah/anggaran.php', $data);
        $this->load->view('template/footer.php');
    }

    public function rpjmd()
    {
        $data['rpjmd'] = $this->rpjmd->getAllRpjmd();
        $this->load->view('template/header.php');
        $this->load->view('menu-dokumen-daerah/rpjmd.php', $data);
        $this->load->view('template/footer.php');
    }

}
?>