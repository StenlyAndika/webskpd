<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktur extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('Struktur_model', 'struktur');
    }

    public function index()
    {
        $data['struktur'] = $this->struktur->getAllStruktur();
        $this->load->view('template-admin/header.php',["data"=>"struktur"]);
        $this->load->view('menu-admin/struktur/index.php', $data);
        $this->load->view('template-admin/footer.php');
    }

    public function tambah()
	{
		$this->form_validation->set_rules('tugas', 'tugas', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header');
			$this->load->view('menu-admin/struktur/tambah');
			$this->load->view('template-admin/footer');
		} else {
			$this->struktur->add();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('struktur');
		}
	}

    public function ubah($id)
	{
        $data['struktur'] = $this->struktur->getStrukturById($id);
        
		$this->form_validation->set_rules('tugas', 'tugas', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header');
			$this->load->view('menu-admin/struktur/ubah', $data);
			$this->load->view('template-admin/footer');
		} else {
			$this->struktur->update();
			$this->session->set_flashdata('flash','Diupdate');
			redirect('struktur');
		}
	}

    public function hapus($id)
	{
		$this->struktur->delete($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('struktur');
	}
}
?>