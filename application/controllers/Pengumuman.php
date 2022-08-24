<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengumuman extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->model('Pengumuman_model', 'pengumuman');
    }

    public function index()
    {
        $data['pengumuman'] = $this->pengumuman->getAllPengumuman();
        $this->load->view('template-admin/header.php',["data"=>"pengumuman"]);
        $this->load->view('menu-admin/pengumuman/index.php', $data);
        $this->load->view('template-admin/footer.php');
    }

    public function tambah()
	{
		$this->form_validation->set_rules('judul', 'Judul', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header');
			$this->load->view('menu-admin/pengumuman/tambah');
			$this->load->view('template-admin/footer');
		} else {
			$this->pengumuman->add();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('pengumuman');
		}
	}

    public function ubah($id)
	{
        $data['pengumuman'] = $this->pengumuman->getPengumumanById($id);
        
		$this->form_validation->set_rules('judul', 'Judul', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header');
			$this->load->view('menu-admin/pengumuman/ubah', $data);
			$this->load->view('template-admin/footer');
		} else {
			$this->pengumuman->update();
			$this->session->set_flashdata('flash','Diupdate');
			redirect('pengumuman');
		}
	}

    public function hapus($id)
	{
		$this->pengumuman->delete($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('pengumuman');
	}
}
?>