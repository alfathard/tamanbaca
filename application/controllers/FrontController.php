<?php

/**
 * @property BacaanModel $bacaan
 */
class FrontController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('BacaanModel', 'bacaan');
	}

	public function index(){
		$data['data'] = $this->bacaan->getData(5);
		return $this->load->view('front/index', $data);
	}

	public function about(){
		//halaman about us
		$this->load->view('front/about');
	}

	public function detail($id){
		$data['data'] = $this->bacaan->getOne($id);
		$this->load->view('front/baca', $data);
	}

	public function baca(){
		$kat = $this->input->post('category');
		$data['data'] = $this->bacaan->getData(null, $kat);
		$data['kategori'] = $kat;
		$this->load->view('front/kategori', $data);
	}

	public function kategori($kategori){
		$data['data'] = $this->bacaan->getData(null, $kategori);
		$this->load->view('front/kategori', $data);
	}
}
