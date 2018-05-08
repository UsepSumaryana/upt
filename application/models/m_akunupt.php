<?php 
 
class M_akunupt extends CI_Model{
     public function __construct() {
        parent::__construct();
  }
	function ambil_data(){
        $this->db->select('t_petugas.id_petugas, t_sarana.nama_sarana, t_petugas.nama_petugas, t_petugas.username'); //mengambil semua data dari tabel data_users dan users
        $this->db->from('t_petugas'); //dari tabel data_users
        $this->db->join('t_sarana', 't_sarana.id_sarana = t_petugas.id_sarana', 'inner');
        $data = $this->db->get(); //mengambil seluruh data
        return $data->result(); //mengembalikan data

	}
    function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}