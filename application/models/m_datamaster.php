<?php 
 
class M_datamaster extends CI_Model{
     public function __construct() {
        parent::__construct();
  }
	function ambil_data(){
        $this->db->select('id_sarana, nama_sarana, jenis_olahraga, alamat, gambar'); //mengambil semua data dari tabel data_users dan users
        $this->db->from('t_sarana'); //dari tabel data_users
        $data = $this->db->get(); //mengambil seluruh data
        return $data->result(); //mengembalikan data

	}

	public function tambah_data($data)
	{
		$this->db->insert('t_sarana', $data);
	}

  public function select_data($id)
  {
    $this->db->where('id_sarana', $id);
    $data = $this->db->get('t_sarana');
    return $data->result();
  }

  public  function edit_data($id, $data)
  {
    $this->db->where('id_sarana', $id);
    $this->db->update('t_sarana', $data);
  }
}