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
}