<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AkunUptController extends CI_Controller {

    function __construct(){
		parent::__construct();		
		$this->load->model('m_akunupt');
	}
	public function index(){
        $data['t_petugas'] = $this->m_akunupt->ambil_data();
        $this->load->view('template/header');
		$this->load->view('akunupt/akunupt',$data);
		$this->load->view('template/footer');
	}

	public function add()
	{
		$this->load->view('template/header');
		$this->load->view('akunupt/addAkunUpt');
		$this->load->view('template/footer');
	}

	public function add_action(){
		$data = array(
			'id_petugas' => $this->input->post('id_petugas'),
			'nama_petugas' => $this->input->post('nama_petugas'),
			'id_sarana' => $this->input->post('id_sarana'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level' => 'upt',
		);
		$this->m_akunupt->tambah_data($data);

        redirect('akunupt','refresh');
	}

	public function delete_action($id ='')
	{
		$this->db->where('id_petugas', $id);
		$this->db->delete('t_petugas');

		redirect('akunupt','refresh');
	}

	public function edit($id = '')
	{
		$data['t_petugas'] = $this->m_akunupt->select_data($id);
        $this->load->view('template/header');
		$this->load->view('akunupt/editAkunUpt', $data);
		$this->load->view('template/footer');
	}

	public function edit_action($id='')
	{
		$data = array(
			'id_petugas' => $this->input->post('id_petugas'),
			'nama_petugas' => $this->input->post('nama_petugas'),
			'id_sarana' => $this->input->post('id_sarana'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'level' => 'upt',
		);
		$this->m_akunupt->edit_data($this->input->post('id_petugas'), $data);
		redirect('akunupt','refresh');
	}



}

/* End of file akunUptController.php */
/* Location: ./application/controllers/akunUptController.php */