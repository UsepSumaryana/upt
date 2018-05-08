<?php 
 
class M_reservasi extends CI_Model{
     public function __construct() {
        parent::__construct();
  }
	function ambil_data(){
        $this->db->select('t_reservasi.id_reservasi, t_sarana.nama_sarana, t_petugas.nama_petugas, t_user.username'); //mengambil semua data dari tabel data_users dan users
        $this->db->from('t_reservasi'); //dari tabel data_users
        $this->db->join('t_sarana', 't_sarana.id_sarana = t_reservasi.id_sarana', 'inner');    
        $this->db->join('t_petugas', 't_petugas.id_sarana = t_sarana.id_sarana', 'inner');   
        $this->db->join('t_user', 't_user.id_user = t_reservasi.id_user', 'inner');    
        $data = $this->db->get(); //mengambil seluruh data
        return $data->result(); //mengembalikan data

	}
}