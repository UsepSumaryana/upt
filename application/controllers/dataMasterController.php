<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataMasterController extends My_Controller {
    
    protected $access = array('admin', 'upt');

    function __construct(){
    	parent::__construct();
		//memanggil function dari controller MY_Controller
		$this->cekLogin();

		//validasi jika session dengan level manager mengakses halaman ini maka akan dialihkan ke halaman manager
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

		$config['upload_path']          = './asset/img';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
 		$this->load->library('upload', $config);

		$data = array(
			'id_sarana' => $this->input->post('id_sarana'),
			'nama_sarana' => $this->input->post('nama_sarana'),
			'jenis_olahraga' => $this->input->post('jenis_olahraga'),
			'geo_lon' => $this->input->post('geoLon'),
			'geo_lat' => $this->input->post('geoLa'),
			'alamat' => $this->input->post('alamat'),
			'gambar' =>$gambar,
		);
		$this->m_datamaster->tambah_data($data);

        redirect('datamaster','refresh');
	}

	public function aksi_upload(){
		$config['upload_path']          = './asset/img';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('datamaster/addDataMaster', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('datamaster/datamaster', $data);
		}
	}

	public function delete_action($id ='')
	{
		$this->db->where('id_sarana', $id);
		$this->db->delete('t_sarana');

		redirect('datamaster','refresh');
	}

	public function edit($id = '')
	{
		
		$data['t_sarana'] = $this->m_datamaster->select_data($id);
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