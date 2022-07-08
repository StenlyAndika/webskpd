<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('Services_model', 'services');
    }

    public function index()
    {
        $data['services'] = $this->services->getAllServices();
        $this->load->view('template-admin/header.php');
        $this->load->view('menu-admin/services/index.php', $data);
        $this->load->view('template-admin/footer.php');
    }

    public function tambah()
	{
		$this->form_validation->set_rules('nama', 'Nama Layanan', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header');
			$this->load->view('menu-admin/services/tambah');
			$this->load->view('template-admin/footer');
		} else {
			$this->services->add();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('services');
		}
	}

    public function ubah($id)
	{
        $data['services'] = $this->services->getServicesById($id);
        
		$this->form_validation->set_rules('nama', 'Nama Layanan', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header');
			$this->load->view('menu-admin/services/ubah', $data);
			$this->load->view('template-admin/footer');
		} else {
			$this->services->update();
			$this->session->set_flashdata('flash','Diupdate');
			redirect('services');
		}
	}

    public function hapus($id)
	{
		$this->services->delete($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('services');
	}
}
?>