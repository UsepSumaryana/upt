<?php 
 
class M_laporan extends CI_Model{
     public function __construct() {
        parent::__construct();
  }
	function ambil_data(){
        $this->db->select('t_reservasi.id_reservasi, t_sarana.nama_sarana, t_user.nama_lengkap, t_reservasi.tgl_reservasi, t_reservasi.tujuan'); //mengambil semua data dari tabel data_users dan users
        $this->db->from('t_reservasi'); //dari tabel data_users
        $this->db->join('t_user', 't_user.id_user = t_reservasi.id_user', 'inner');    
        $this->db->join('t_sarana', 't_sarana.id_sarana = t_reservasi.id_sarana', 'inner'); 
        $data = $this->db->get(); //mengambil seluruh data
        return $data->result(); //mengembalikan data

	}
}