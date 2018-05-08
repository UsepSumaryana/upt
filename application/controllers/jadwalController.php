<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalController extends CI_Controller {
    function __construct(){
		parent::__construct();		
		$this->load->model('m_jadwal');
	}
	public function index()
	{
        $data['t_jadwal'] = $this->m_jadwal->ambil_data();
		$this->load->view('penjadwalan',$data);
	}

}

/* End of file jadwalController.php */
/* Location: ./application/controllers/jadwalController.php */