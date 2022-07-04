<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Sopd_model');
	}

	public function index()
	{
		$data['sopd'] = $this->Sopd_model->getAllSopd();
		$this->load->view('template/header.php');
		$this->load->view('landing/menu.php');
		$this->load->view('landing/domain.php', $data);
		$this->load->view('template/footer.php');
	}

	public function pemerintahan()
	{
		$this->load->view('template/header.php');
		$this->load->view('menu-pemerintahan/pemerintahan.php');
		$this->load->view('menu-pemerintahan/profil_wako.php');
		$this->load->view('menu-pemerintahan/profil_wawako.php');
		$this->load->view('menu-pemerintahan/visimisi.php');
		$this->load->view('menu-pemerintahan/lambang.php');
		$this->load->view('template/footer.php');
	}

	public function layanan_publik()
	{
		$this->load->view('template/header.php');
		$this->load->view('landing/layanan_publik.php');
		$this->load->view('template/footer.php');
	}

	public function layanan_pegawai()
	{
		$this->load->view('template/header.php');
		$this->load->view('landing/layanan_pegawai.php');
		$this->load->view('template/footer.php');
	}

	public function lpse()
	{
		$this->load->view('template/header.php');
		$this->load->view('landing/lpse.php');
		$this->load->view('template/footer.php');
	}

	public function perencanaan_pembangunan()
	{
		$this->load->view('template/header.php');
		$this->load->view('landing/perencanaan_pembangunan.php');
		$this->load->view('template/footer.php');
	}

}
