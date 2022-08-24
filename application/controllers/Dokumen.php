<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dokumen extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('Dokumen_model', 'dokumen');
    }

    public function index()
    {
        $data['dokumen'] = $this->dokumen->getAllDokumen();
        $this->load->view('template-admin/header.php',["data"=>"dokumen"]);
        $this->load->view('menu-admin/dokumen/index.php', $data);
        $this->load->view('template-admin/footer.php');
    }

    public function tambah()
	{
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header');
			$this->load->view('menu-admin/dokumen/tambah');
			$this->load->view('template-admin/footer');
		} else {
			$this->dokumen->add();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('dokumen');
		}
	}

    public function ubah($id)
	{
        $data['dokumen'] = $this->dokumen->getDokumenById($id);
		
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header');
			$this->load->view('menu-admin/dokumen/ubah', $data);
			$this->load->view('template-admin/footer');
		} else {
			$this->dokumen->update();
			$this->session->set_flashdata('flash','Diupdate');
			redirect('dokumen');
		}
	}

    public function hapus($id)
	{
		$this->dokumen->delete($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('dokumen');
	}
}
?>