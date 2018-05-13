<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('home');
		$this->load->view('template/footer');

	}

}

/* End of file homeController.php */
/* Location: ./application/controllers/homeController.php */