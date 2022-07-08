<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penghargaan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('Penghargaan_model', 'penghargaan');
    }

    public function index()
    {
        $data['penghargaan'] = $this->penghargaan->getAllPenghargaan();
        $this->load->view('template-admin/header.php');
        $this->load->view('menu-admin/penghargaan/index.php', $data);
        $this->load->view('template-admin/footer.php');
    }

    public function tambah()
	{
		$this->form_validation->set_rules('ket', 'Keterangan', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header');
			$this->load->view('menu-admin/penghargaan/tambah');
			$this->load->view('template-admin/footer');
		} else {
			$this->penghargaan->add();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('penghargaan');
		}
	}

    public function ubah($id)
	{
        $data['penghargaan'] = $this->penghargaan->getPenghargaanById($id);
        
		$this->form_validation->set_rules('ket', 'Keterangan', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header');
			$this->load->view('menu-admin/penghargaan/ubah', $data);
			$this->load->view('template-admin/footer');
		} else {
			$this->penghargaan->update();
			$this->session->set_flashdata('flash','Diupdate');
			redirect('penghargaan');
		}
	}

    public function hapus($id)
	{
		$this->penghargaan->delete($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('penghargaan');
	}
}
?>