<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ReservasiController extends My_Controller {
    
    function __construct(){

		parent::__construct();		
		$this->load->model('m_reservasi');
		$this->load->model('m_jadwal');

	}
	
    public function index(){
        $data['t_reservasi'] = $this->m_reservasi->ambil_data();
        $this->load->view('template/header');
		$this->load->view('reservasi/reservasi',$data);
		$this->load->view('template/footer');
	}

	public function add()
	{
		$this->load->view('template/header');
		$this->load->view('reservasi/addReservasi');
		$this->load->view('template/footer');
	}

	public function add_action(){
		$data = array(
			'id_reservasi' => $this->input->post('id_reservasi'),
			'id_user' => $this->input->post('id_user'),
			'id_sarana' => $this->input->post('id_sarana'),
			'tgl_reservasi' => $this->input->post('tanggalReservasi'),
			'tgl_booking_start' => $this->input->post('tanggalAwal'),
			'tgl_booking_end' => $this->input->post('tanggalAkhir'),
			'tujuan' => $this->input->post('tujuan'),
		);
		$this->m_reservasi->tambah_data($data);

        redirect('reservasi','refresh');
	}

	public function reject_action($id ='')
	{
		$this->db->where('id_reservasi ', $id);
		$this->db->delete('t_reservasi');

		redirect('reservasi','refresh');
	}

	public function accept_action($id = '')
	{
		$data['t_reservasi'] = $this->m_reservasi->select_data($id);
		foreach($data['t_reservasi'] as $key):
		$datastore = array(
			
				'id_jadwal' => $key->id_reservasi,
				'id_sarana' => $key->id_sarana,
				'id_user' => $key->id_user,
				'tgl_penggunaan_start' => $key->tgl_booking_start,
				'tgl_penggunaan_end' => $key->tgl_booking_end,
				'jadwal_source' => 'user',
			
		);
		endforeach;
		$this->m_jadwal->tambah_data($datastore);

        redirect('penjadwalan','refresh');
	}

}