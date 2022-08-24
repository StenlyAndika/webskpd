<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->model('Admin_model', 'admin');
	}

	public function index()
    {
		$data['admin'] =  $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		if ($data['admin']['username'] == null) {
			redirect(base_url());
		} else {
			$data['admin'] = $this->admin->getAllAdmin();
			$this->load->view('template-admin/header.php',["data"=>"admin"]);
			$this->load->view('menu-admin/admin/index.php', $data);
			$this->load->view('template-admin/footer.php');
		}
    }

    public function tambah()
	{
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header');
			$this->load->view('menu-admin/admin/tambah');
			$this->load->view('template-admin/footer');
		} else {
			$this->admin->add();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('admin');
		}
	}

    public function ubah($id)
	{
        $data['admin'] = $this->admin->getAdminById($id);
        
		$this->form_validation->set_rules('nama', 'nama', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template-admin/header');
			$this->load->view('menu-admin/admin/ubah', $data);
			$this->load->view('template-admin/footer');
		} else {
			$this->admin->update();
			$this->session->set_flashdata('flash','Diupdate');
			redirect('admin');
		}
	}

    public function hapus($id)
	{
		$this->admin->delete($id);
		$this->session->set_flashdata('flash','Dihapus');
		redirect('admin');
	}

	// public function profil()
	// {
	// 	$data['admin'] =  $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
		
	// 	$this->load->view('templateadmin/header', $data);
	// 	$this->load->view('admin/profil', $data);
	// 	$this->load->view('templateadmin/footer');
	// }

	// public function ubah()
	// {
	// 	$this->Admin_model->updateadmin();
	// 	$this->session->set_flashdata('flash','Diperbaharui');
	// 	redirect('admin/profil');
	// }
}
