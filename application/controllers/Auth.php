<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->library('form_validation');
		$this->load->model('Admin_model', 'admin');
    }

    public function index()
	{
		$data['admin'] = $this->admin->getAllAdmin();
		if(count($data['admin'])<=0) {
			$this->load->view('template/header.php');
			$this->load->view('auth/sign_up.php');
			$this->load->view('template/footer.php');
		} else {
			$this->load->view('template/header.php');
			$this->load->view('auth/log_in.php');
			$this->load->view('template/footer.php');
		}
	}

	public function daftar()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template/header');
			$this->load->view('auth/sign_up');
			$this->load->view('template/footer');
		} else {
			$this->admin->add();
			$this->session->set_flashdata('flash','Ditambahkan');
			redirect('auth');
		}
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ( $this->form_validation->run() == FALSE ) {
			$this->load->view('template/header');
			$this->load->view('auth/log_in');
			$this->load->view('template/footer');
		} else {
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$loginadmin = $this->db->get_where('admin', ['username' => $username])->row_array();
			if ($loginadmin['username'] != NULL) {
				if ($password == $loginadmin['password']) {
					$data = [
					'username' => $username,
					'nama' => $loginadmin['nama']
				];
				$this->session->set_userdata($data);
				redirect(base_url('admin'));
				} else {
					$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password Salah</div>');
					redirect(base_url());
				}
			} else {
				$this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password Salah</div>');
				redirect(base_url());
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('username');
		redirect(base_url());
	}

}