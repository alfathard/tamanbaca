<?php

/**
 * @property AuthModel $authmodel
 * @property BacaanModel $bacaan
 */
class BacaanController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('BacaanModel', 'bacaan');
		$this->load->model('AuthModel', 'authmodel');
	}

	public function index(){
		$this->load->view('admin/index');
	}

	public function create(){
		if (!$this->authmodel->checkuser()) redirect('login');

		$this->load->view('admin/baca/create');
	}

	public function store(){
		if (!$this->authmodel->checkuser()) redirect('login');

		$data['judul'] = $this->input->post('judul');
		$data['kategori'] = $this->input->post('kategori');
		$data['isi'] = $this->input->post('isi');

		$this->bacaan->save($data);

		redirect('dashboard');
	}

	public function edit($id){
		if (!$this->authmodel->checkuser()) redirect('login');

		$data['bacaan'] = $this->bacaan->getOne($id);
		$this->load->view('admin/baca/edit', $data);
	}

	public function update($id){
		if (!$this->authmodel->checkuser()) redirect('login');

		$data['judul'] = $this->input->post('judul');
		$data['kategori'] = $this->input->post('kategori');
		$data['isi'] = $this->input->post('isi');

		if ($this->bacaan->update($id, $data)) redirect('dashboard');
	}

	public function delete($id){
		if (!$this->authmodel->checkuser()) redirect('login');

		$this->bacaan->delete($id);
	}

}
