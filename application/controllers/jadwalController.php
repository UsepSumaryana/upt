<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JadwalController extends My_Controller {
    function __construct(){
		parent::__construct();		
		$this->load->model('m_jadwal');
	}
	public function index()
	{
        $data['t_jadwal'] = $this->m_jadwal->ambil_data();
        $this->load->view('template/header');
		$this->load->view('penjadwalan/penjadwalan',$data);
		$this->load->view('template/footer');
	}

	public function add()
	{
		$this->load->view('template/header');
		$this->load->view('penjadwalan/addPenjadwalan');
		$this->load->view('template/footer');
	}

	public function add_action(){
		$data = array(
			'id_jadwal' => $this->input->post('id_jadwal'),
			'id_sarana' => $this->input->post('id_sarana'),
			'id_user' => $this->input->post('id_user'),
			'tgl_penggunaan_start' => $this->input->post('tanggalAwal'),
			'tgl_penggunaan_end' => $this->input->post('tanggalAkhir'),
			'jadwal_source' => $this->input->post('jadwalSource'),
		);
		$this->m_jadwal->tambah_data($data);

        redirect('penjadwalan','refresh');
	}

	public function delete_action($id ='')
	{
		$this->db->where('id_jadwal', $id);
		$this->db->delete('t_jadwal');

		redirect('penjadwalan','refresh');
	}

	public function edit($id = '')
	{
		$valid_id = $id;
		$data['t_jadwal'] = $this->m_jadwal->select_data($valid_id);
        $this->load->view('template/header');
		$this->load->view('penjadwalan/editPenjadwalan', $data);
		$this->load->view('template/footer');
	}

	public function edit_action($id='')
	{
		$data = array(
			'id_jadwal' => $this->input->post('id_jadwal'),
			'id_sarana' => $this->input->post('id_sarana'),
			'id_user' => $this->input->post('id_user'),
			'tgl_penggunaan_start' => $this->input->post('tanggalAwal'),
			'tgl_penggunaan_end' => $this->input->post('tanggalAkhir'),
			'jadwal_source' => $this->input->post('jadwalSource'),
		);
		$this->m_jadwal->edit_data($this->input->post('id_jadwal'), $data);
		redirect('penjadwalan','refresh');
	}

}

/* End of file jadwalController.php */
/* Location: ./application/controllers/jadwalController.php */