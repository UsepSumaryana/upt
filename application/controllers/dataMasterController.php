<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataMasterController extends CI_Controller {
    
    function __construct(){
		parent::__construct();		
		$this->load->model('m_datamaster');
	}
	public function index()
	{
        $data['t_sarana'] = $this->m_datamaster->ambil_data();
		$this->load->view('datamaster',$data);
	}

}

/* End of file dataMasterController.php */
/* Location: ./application/controllers/dataMasterController.php */