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
		$this->load->model('Foto_model', 'foto');
		$this->load->model('Dokumen_model', 'dokumen');
	}
	
	public function index()
	{
		$data['data'] = "dashboard";
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		$data['admin'] =  $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->result_array();
		if (count($data['admin']) > 0) {
			$this->load->view('template-admin/header', $data);
			$this->load->view('menu-admin/dashboard.php');
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getAllBerita();
			$this->load->view('template/header.php', $data);
			$this->load->view('landing/berita.php', $data);
			$this->load->view('template/scroll.php');
			$this->load->view('template/footer.php');
		}
	}

	public function detail($id)
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		$data['admin'] =  $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->result_array();
		if (count($data['admin']) > 0) {
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['berita'] = $this->berita->getBeritaById($id);
			$data['berita2'] = $this->berita->getBeritaRandom();
			$this->load->view('template/header.php', $data);
			$this->load->view('landing/detail_berita.php', $data);
			$this->load->view('template/scroll.php');
			$this->load->view('template/footer.php');
		}
	}

	public function sejarah()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		$data['admin'] =  $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->result_array();
		if (count($data['admin']) > 0) {
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['sejarah'] = $this->sejarah->getAllSejarah();
			$this->load->view('template/header.php', $data);
			$this->load->view('menu-profil/sejarah.php', $data);
			$this->load->view('template/scroll.php');
			$this->load->view('template/footer.php');
		}
	}

	public function visimisi()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		$data['admin'] =  $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->result_array();
		if (count($data['admin']) > 0) {
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['visimisi'] = $this->visimisi->getAllVisiMisi();
			$this->load->view('template/header.php', $data);
			$this->load->view('menu-profil/visimisi.php', $data);
			$this->load->view('template/scroll.php');
			$this->load->view('template/footer.php');
		}
	}

	public function struktur()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		$data['admin'] =  $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->result_array();
		if (count($data['admin']) > 0) {
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['struktur'] = $this->struktur->getAllStruktur();
			$this->load->view('template/header.php', $data);
			$this->load->view('menu-profil/struktur.php', $data);
			$this->load->view('template/scroll.php');
			$this->load->view('template/footer.php');
		}
	}

	public function foto()
    {
		$data['instansi'] =  $this->db->get('instansi')->result_array();
        $data['admin'] =  $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->result_array();
		if (count($data['admin']) > 0) {
            $this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
            $data['foto'] = $this->foto->getAllFoto();
            $this->load->view('template/header.php', $data);
            $this->load->view('menu-galeri/foto.php', $data);
            $this->load->view('template/footer.php');
        }
    }

	public function dokumen()
    {
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		$data['admin'] =  $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->result_array();
		if (count($data['admin']) > 0) {
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['dokumen'] = $this->dokumen->getAllDokumenSort();
			$this->load->view('template/header.php', $data);
			$this->load->view('menu-informasi/dokumen.php', $data);
			$this->load->view('template/footer.php');
		}
    }

	public function pengumuman()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		$data['admin'] =  $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->result_array();
		if (count($data['admin']) > 0) {
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
			$this->load->view('template/header.php', $data);
			$this->load->view('landing/pengumuman.php', $data);
			$this->load->view('template/scroll.php');
			$this->load->view('template/footer.php');
		}
	}

}
