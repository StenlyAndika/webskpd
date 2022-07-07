<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rpjmd extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('Rpjmd_model', 'rpjmd');
    }

    public function index()
    {
        $data['rpjmd'] = $this->rpjmd->getAllRpjmd();
        $this->load->view('template-admin/header.php');
        $this->load->view('menu-admin/rpjmd/index.php', $data);
        $this->load->view('template-admin/footer.php');
    }

    public function tambah()
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header');
			$this->load->view('menu-admin/rpjmd/tambah');
			$this->load->view('template-admin/footer');
		} else {
			$this->rpjmd->add();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('rpjmd');
		}
	}

    public function ubah($id)
	{
        $data['rpjmd'] = $this->rpjmd->getRpjmdById($id);
        
		$this->form_validation->set_rules('judul', 'Judul', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header');
			$this->load->view('menu-admin/rpjmd/ubah', $data);
			$this->load->view('template-admin/footer');
		} else {
			$this->rpjmd->update();
			$this->session->set_flashdata('flash','Diupdate');
			redirect('rpjmd');
		}
	}

    public function hapus($id)
	{
		$this->rpjmd->delete($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('rpjmd');
	}
}
?>