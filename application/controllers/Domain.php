<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Domain extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('Sopd_model', 'sopd');
    }

    public function index()
    {
        $data['sopd'] = $this->sopd->getAllSopd();
        $this->load->view('template-admin/header.php');
        $this->load->view('menu-admin/domain/index.php', $data);
        $this->load->view('template-admin/footer.php');
    }

    public function tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama SOPD', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header');
			$this->load->view('menu-admin/domain/tambah');
			$this->load->view('template-admin/footer');
		} else {
			$this->sopd->add();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('domain');
		}
	}

    public function ubah($id)
	{
        $data['sopd'] = $this->sopd->getSopdById($id);
        
		$this->form_validation->set_rules('nama', 'Nama SOPD', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header');
			$this->load->view('menu-admin/domain/ubah', $data);
			$this->load->view('template-admin/footer');
		} else {
			$this->sopd->update();
			$this->session->set_flashdata('flash','Diupdate');
			redirect('domain');
		}
	}

    public function hapus($id)
	{
		$this->sopd->delete($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('domain');
	}
}
?>