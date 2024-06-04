<?php

/**
 * @property $authmodel
 */
class AdminController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('AuthModel', 'authmodel');
	}


	public function index(){
		//halaman dashboard admin
		if ($this->authmodel->checkuser()) {
			$this->load->view('admin/index');
		}else{
			redirect('login');
		}
	}

	public function loginpage(){
		if ($this->authmodel->checkuser()) {
			redirect('dashboard');
		}else{
			$this->load->view('admin/login');
		}
	}

	public function login(){
		$this->load->model('');

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if ($this->authmodel->login($username, $password)){
			redirect('dashboard');
		}else{
			$this->session->set_flashdata('message_login_error', 'Login gagal, pastikan username dan password sudah benar');
		}

		$this->load->view('admin/login');
	}

	public function logout(){
		$this->authmodel->logout();
		redirect(base_url('/'));
	}

}
