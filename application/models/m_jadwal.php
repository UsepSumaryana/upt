<?php 
 
class M_jadwal extends CI_Model{
     public function __construct() {
        parent::__construct();
  }
	function ambil_data(){
        $this->db->select('t_jadwal.id_jadwal, t_user.nama_lengkap, t_jadwal.tgl_penggunaan_start, t_reservasi.tujuan'); //mengambil semua data dari tabel data_users dan users
        $this->db->from('t_jadwal'); //dari tabel data_users
        $this->db->join('t_user', 't_user.id_user = t_jadwal.id_user', 'left');    
        $this->db->join('t_reservasi', 't_reservasi.id_user = t_user.id_user', 'left'); 
        $data = $this->db->get(); //mengambil seluruh data
        return $data->result(); //mengembalikan data

	}

  public function tambah_data($data)
  {
    $this->db->insert('t_jadwal', $data);
  }

  public function select_data($id)
  {
    $this->db->where('id_jadwal', $id);
    $data = $this->db->get('t_jadwal');
    return $data->result();
  }

  public  function edit_data($id, $data)
  {
    $this->db->where('id_jadwal', $id);
    $this->db->update('t_jadwal', $data);
  }
}