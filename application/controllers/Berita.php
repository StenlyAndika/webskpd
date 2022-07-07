<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        $this->load->view('template-admin/header.php');
        $this->load->view('menu-admin/berita/index.php');
        $this->load->view('template-admin/footer.php');
    }
}
?>