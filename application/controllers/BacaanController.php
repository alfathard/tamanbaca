<?php

/**
 * @property AuthModel $authmodel
 * @property BacaanModel $bacaan
 * @property $upload
 * @property CI_Form_validation $form_validation
 */
class BacaanController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('BacaanModel', 'bacaan');
		$this->load->model('AuthModel', 'authmodel');
		if (!$this->authmodel->checkuser()) redirect('login');
	}

	public function index(){
		$this->load->view('admin/index');
	}

	public function create(){
		$this->load->view('admin/baca/create');
	}

	public function store(){
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi Bacaan', 'required', ['required' => '%s wajib di isi!']);

		if ($this->form_validation->run() == FALSE){
			return $this->load->view('admin/baca/create');
		}

		$config['upload_path']          = './assets/blog/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['encrypt_name'] 		= TRUE;
		$config['max_size']             = 3024;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('foto')){
			print_r($this->upload->display_errors());
		}else{
			$foto = $this->upload->data();

			$data['judul'] = ucwords($this->input->post('judul'));
			$data['kategori'] = $this->input->post('kategori');
			$data['isi'] = $this->input->post('isi');
			$data['uploader'] = $this->session->userdata('user')->nama;
			$data['foto'] = $foto['file_name'];

			$this->bacaan->save($data);

			redirect('dashboard');
		}
	}

	public function edit($id){
		$data['bacaan'] = $this->bacaan->getOne($id);
		$this->load->view('admin/baca/edit', $data);
	}

	public function update($id){
		$this->form_validation->set_rules('judul', 'Judul', 'required');
		$this->form_validation->set_rules('isi', 'Isi Bacaan', 'required', ['required' => '%s wajib di isi!']);

		if ($this->form_validation->run() == FALSE){
			return $this->load->view('admin/baca/create');
		}

		$config['upload_path']          = './assets/blog/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['encrypt_name'] 		= TRUE;
		$config['max_size']             = 3024;

		$this->load->library('upload', $config);

		$data['judul'] = ucwords($this->input->post('judul'));
		$data['kategori'] = $this->input->post('kategori');
		$data['isi'] = $this->input->post('isi');
		$data['uploader'] = $this->session->userdata('user')->nama;

		if (!empty($_FILES['foto'])) {
			if (!$this->upload->do_upload('foto')){
				print_r($this->upload->display_errors());
			}else{
				if ($foto = $this->upload->data()){
					$this->deleteImage($id);
					$data['foto'] = $foto['file_name'];
				}
			}
		}

		if ($this->bacaan->update($id, $data)) redirect('dashboard');
	}

	public function delete($id){
		$this->deleteImage($id);
		$this->bacaan->delete($id);
	}

	private function deleteImage($id)
	{
		$gallery = $this->bacaan->getOne($id);
		if ($gallery->foto != "default.jpg") {
			$filename = explode(".", $gallery->foto)[0];
			return array_map('unlink', glob(FCPATH."./assets/blog/$filename.*"));
		}
	}

}
