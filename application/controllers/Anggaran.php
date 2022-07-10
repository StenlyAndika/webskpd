<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('Anggaran_model', 'anggaran');
    }

    public function index()
    {
        $data['anggaran'] = $this->anggaran->getAllAnggaran();
        $this->load->view('template-admin/header.php');
        $this->load->view('menu-admin/anggaran/index.php', $data);
        $this->load->view('template-admin/footer.php');
    }

    public function tambah()
	{
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header');
			$this->load->view('menu-admin/anggaran/tambah');
			$this->load->view('template-admin/footer');
		} else {
			$this->anggaran->add();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('anggaran');
		}
	}

    public function ubah($id)
	{
        $data['anggaran'] = $this->anggaran->getAnggaranById($id);
		
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header');
			$this->load->view('menu-admin/anggaran/ubah', $data);
			$this->load->view('template-admin/footer');
		} else {
			$this->anggaran->update();
			$this->session->set_flashdata('flash','Diupdate');
			redirect('anggaran');
		}
	}

    public function hapus($id)
	{
		$this->anggaran->delete($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('anggaran');
	}
}
?>