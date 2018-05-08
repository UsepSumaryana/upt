<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah_akunUptController extends CI_Controller {

    function __construct(){
		parent::__construct();		
//		$this->load->model('m_akunupt');
	}
	public function index(){
//        $data['t_petugas'] = $this->m_akunupt->ambil_data();
		$this->load->view('tambah_akunupt');
	}

}

/* End of file akunUptController.php */
/* Location: ./application/controllers/akunUptController.php */