<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Pengumuman_model', 'pengumuman');
		$this->load->model('Berita_model', 'berita');
	}

	public function dashboard() 
	{
		$this->load->view('template-admin/header.php');
		$this->load->view('template-admin/footer.php');
	}

	public function index()
	{
		$data['berita'] = $this->berita->getAllBerita();
		$this->load->view('template/header.php');
		$this->load->view('landing/menu.php', $data);
		$this->load->view('template/scroll.php');
		$this->load->view('template/footer.php');
	}

}
