<?php 
 
class M_jadwal extends CI_Model{
     public function __construct() {
        parent::__construct();
  }
	function ambil_data(){
        $this->db->select('t_jadwal.id_jadwal, t_user.nama_lengkap, t_jadwal.tgl_penggunaan_start, t_jadwal.tgl_penggunaan_start, t_reservasi.tujuan'); //mengambil semua data dari tabel data_users dan users
        $this->db->from('t_jadwal'); //dari tabel data_users
        $this->db->join('t_user', 't_user.id_user = t_jadwal.id_user', 'inner');    
        $this->db->join('t_reservasi', 't_reservasi.id_user = t_user.id_user', 'inner'); 
        $data = $this->db->get(); //mengambil seluruh data
        return $data->result(); //mengembalikan data

	}
}