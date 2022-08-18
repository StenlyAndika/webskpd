<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Pengumuman_model', 'pengumuman');
		$this->load->model('Berita_model', 'berita');
		$this->load->model('Sejarah_model', 'sejarah');
		$this->load->model('Visimisi_model', 'visimisi');
		$this->load->model('Struktur_model', 'struktur');
		$this->load->model('Dokumen_model', 'dokumen');
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

	public function sejarah()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		$data['sejarah'] = $this->sejarah->getAllSejarah();
		$this->load->view('template/header.php');
		$this->load->view('menu-profil/sejarah.php', $data);
		$this->load->view('template/scroll.php');
		$this->load->view('template/footer.php');
	}

	public function visimisi()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		$data['visimisi'] = $this->visimisi->getAllVisiMisi();
		$this->load->view('template/header.php');
		$this->load->view('menu-profil/visimisi.php', $data);
		$this->load->view('template/scroll.php');
		$this->load->view('template/footer.php');
	}

	public function struktur()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		$data['struktur'] = $this->struktur->getAllStruktur();
		$this->load->view('template/header.php');
		$this->load->view('menu-profil/struktur.php', $data);
		$this->load->view('template/scroll.php');
		$this->load->view('template/footer.php');
	}

	public function dokumen()
    {
        $data['dokumen'] = $this->dokumen->getAllDokumenSort();
        $this->load->view('template/header.php');
        $this->load->view('menu-informasi/dokumen.php', $data);
        $this->load->view('template/footer.php');
    }

}
