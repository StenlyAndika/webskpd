<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarah extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('Sejarah_model', 'sejarah');
    }

    public function index()
    {
        $data['sejarah'] = $this->sejarah->getAllSejarah();
		$this->load->view('template-admin/header.php',["data"=>"sejarah"]);
        $this->load->view('menu-admin/sejarah/index.php', $data);
        $this->load->view('template-admin/footer.php');
    }

    public function tambah()
	{
		$this->form_validation->set_rules('sejarah', 'sejarah', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header');
			$this->load->view('menu-admin/sejarah/tambah');
			$this->load->view('template-admin/footer');
		} else {
			$this->sejarah->add();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('sejarah');
		}
	}

    public function ubah($id)
	{
        $data['sejarah'] = $this->sejarah->getSejarahById($id);
        
		$this->form_validation->set_rules('sejarah', 'sejarah', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header');
			$this->load->view('menu-admin/sejarah/ubah', $data);
			$this->load->view('template-admin/footer');
		} else {
			$this->sejarah->update();
			$this->session->set_flashdata('flash','Diupdate');
			redirect('sejarah');
		}
	}

    public function hapus($id)
	{
		$this->sejarah->delete($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('sejarah');
	}
}
?>