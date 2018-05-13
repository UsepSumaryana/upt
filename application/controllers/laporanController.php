<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanController extends CI_Controller {
    
    function __construct(){
		parent::__construct();		
		$this->load->model('m_laporan');
	}
	
	public function index()
	{
        $data['t_reservasi'] = $this->m_laporan->ambil_data();
        $this->load->view('template/header');
		$this->load->view('laporan/laporan',$data);
		$this->load->view('template/footer');
	}

}

/* End of file laporanController.php */
/* Location: ./application/controllers/laporanController.php */