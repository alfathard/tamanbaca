<?php

class FrontController extends CI_Controller
{

	public function index(){
		return $this->load->view('front/index');
	}
}
