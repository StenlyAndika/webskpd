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

	public function dashboard() 
	{
		$this->load->view('template-admin/header.php');
		$this->load->view('template-admin/footer.php');
	}

	public function index()
	{
		$data['admin'] =  $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->result_array();
		if (count($data['admin']) > 0) {
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$data['berita'] = $this->berita->getAllBerita();
			$this->load->view('template/header.php');
			$this->load->view('landing/berita.php', $data);
			$this->load->view('template/scroll.php');
			$this->load->view('template/footer.php');
		}
	}

	public function detail($id)
	{
		$data['admin'] =  $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->result_array();
		if (count($data['admin']) > 0) {
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$data['berita'] = $this->berita->getBeritaById($id);
			$data['berita2'] = $this->berita->getBeritaRandom();
			$this->load->view('template/header.php');
			$this->load->view('landing/detail_berita.php', $data);
			$this->load->view('template/scroll.php');
			$this->load->view('template/footer.php');
		}
	}

	public function sejarah()
	{
		$data['admin'] =  $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->result_array();
		if (count($data['admin']) > 0) {
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$data['sejarah'] = $this->sejarah->getAllSejarah();
			$this->load->view('template/header.php');
			$this->load->view('menu-profil/sejarah.php', $data);
			$this->load->view('template/scroll.php');
			$this->load->view('template/footer.php');
		}
	}

	public function visimisi()
	{
		$data['admin'] =  $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->result_array();
		if (count($data['admin']) > 0) {
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$data['visimisi'] = $this->visimisi->getAllVisiMisi();
			$this->load->view('template/header.php');
			$this->load->view('menu-profil/visimisi.php', $data);
			$this->load->view('template/scroll.php');
			$this->load->view('template/footer.php');
		}
	}

	public function struktur()
	{
		$data['admin'] =  $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->result_array();
		if (count($data['admin']) > 0) {
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$data['struktur'] = $this->struktur->getAllStruktur();
			$this->load->view('template/header.php');
			$this->load->view('menu-profil/struktur.php', $data);
			$this->load->view('template/scroll.php');
			$this->load->view('template/footer.php');
		}
	}

	public function foto()
    {
        $data['admin'] =  $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->result_array();
		if (count($data['admin']) > 0) {
            $this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
            $data['instansi'] =  $this->db->get('instansi')->result_array();
            $data['foto'] = $this->foto->getAllFoto();
            $this->load->view('template/header.php');
            $this->load->view('menu-galeri/foto.php', $data);
            $this->load->view('template/footer.php');
        }
    }

	public function dokumen()
    {
		$data['admin'] =  $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->result_array();
		if (count($data['admin']) > 0) {
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['dokumen'] = $this->dokumen->getAllDokumenSort();
			$this->load->view('template/header.php');
			$this->load->view('menu-informasi/dokumen.php', $data);
			$this->load->view('template/footer.php');
		}
    }

	public function pengumuman()
	{
		$data['admin'] =  $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->result_array();
		if (count($data['admin']) > 0) {
			$this->load->view('template-admin/header', $data);
			$this->load->view('template-admin/footer');
		} else {
			$data['instansi'] =  $this->db->get('instansi')->result_array();
			$data['pengumuman'] = $this->pengumuman->getAllPengumuman();
			$this->load->view('template/header.php');
			$this->load->view('landing/pengumuman.php', $data);
			$this->load->view('template/scroll.php');
			$this->load->view('template/footer.php');
		}
	}

}
