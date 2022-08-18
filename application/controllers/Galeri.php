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

    public function foto()
    {
        $data['instansi'] =  $this->db->get('instansi')->result_array();
        $data['foto'] = $this->foto->getAllFoto();
        $this->load->view('template/header.php');
        $this->load->view('menu-galeri/foto.php', $data);
        $this->load->view('template/footer.php');
    }
}
?>