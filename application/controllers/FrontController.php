<?php

class FrontController extends CI_Controller
{

	public function index(){
		//halaman awal webnya disini
		return $this->load->view('front/index');
	}

	public function about(){
		//halaman about us
		$this->load->view('front/about');
	}

	public function detail(){
		//halaman detail bacaan nya
		$this->load->view('front/baca');
	}
}
