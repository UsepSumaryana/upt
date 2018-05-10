<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataMasterController extends My_Controller {
    
    protected $access = array('admin', 'upt');

    function __construct(){
    	parent::__construct();

		//memanggil function dari controller MY_Controller
		$this->cekLogin();

		//validasi jika session dengan level manager mengakses halaman ini maka akan dialihkan ke halaman manager
    	if ($this->session->userdata('level') == "upt") {
    		redirect('home');
		}
		$this->load->model('m_datamaster');
	}
	public function index()
	{
        $data['t_sarana'] = $this->m_datamaster->ambil_data();
        $this->load->view('template/header');
		$this->load->view('datamaster/datamaster', $data);
		$this->load->view('template/footer');
	}

	public function add()
	{
		$this->load->view('template/header');
		$this->load->view('datamaster/addDataMaster');
		$this->load->view('template/footer');
	}

	public function add_action(){
		$data = array(
			'id_sarana' => $this->input->post('id_sarana'),
			'nama_sarana' => $this->input->post('nama_sarana'),
			'jenis_olahraga' => $this->input->post('jenis_olahraga'),
			'geo_lon' => $this->input->post('geoLon'),
			'geo_lat' => $this->input->post('geoLa'),
			'alamat' => $this->input->post('alamat'),
			'gambar' => $this->input->post('foto'),
		);
		$this->m_datamaster->tambah_data($data);

        redirect('datamaster','refresh');
	}

	public function delete_action($id ='')
	{
		$this->db->where('id_sarana', $id);
		$this->db->delete('t_sarana');

		redirect('datamaster','refresh');
	}

	public function edit($id = '')
	{
		$valid_id = base64_decode($id);
		$data['t_sarana'] = $this->m_datamaster->select_data($valid_id);
        $this->load->view('template/header');
		$this->load->view('datamaster/editDataMaster', $data);
		$this->load->view('template/footer');
	}

	public function edit_action($id='')
	{
		$data = array(
			'id_sarana' => $this->input->post('id_sarana'),
			'nama_sarana' => $this->input->post('nama_sarana'),
			'jenis_olahraga' => $this->input->post('jenis_olahraga'),
			'geo_lon' => $this->input->post('geoLon'),
			'geo_lat' => $this->input->post('geoLa'),
			'alamat' => $this->input->post('alamat'),
			'gambar' => $this->input->post('foto'),
		);
		$this->m_datamaster->edit_data($this->input->post('id_sarana'), $data);
		redirect('datamaster','refresh');
	}


}

/* End of file dataMasterController.php */
/* Location: ./application/controllers/dataMasterController.php */