<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReservasiController extends CI_Controller {
    
    function __construct(){
		parent::__construct();		
		$this->load->model('m_reservasi');
	}
	
    public function index(){
        $data['t_reservasi'] = $this->m_reservasi->ambil_data();
		$this->load->view('reservasi',$data);
	}

}

/* End of file reservasiController.php */
/* Location: ./application/controllers/reservasiController.php */