<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AkunUptController extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('m_akunupt');
	}
	public function index(){
        $data['t_petugas'] = $this->m_akunupt->ambil_data();
		$this->load->view('akunupt',$data);
	}
    function hapus($id_petugas){
	$where = array('id_petugas' => $id_petugas);
	$this->m_akunupt->hapus_data($where,'t_petugas');
	redirect('akunupt');
}

}

/* End of file akunUptController.php */
/* Location: ./application/controllers/akunUptController.php */