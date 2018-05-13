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
  public function tambah_data($data)
  {
    $this->db->insert('t_petugas', $data);
  }

  public function select_data($id)
  {
    $this->db->where('id_petugas', $id);
    $data = $this->db->get('t_petugas');
    return $data->result();
  }

  public  function edit_data($id, $data)
  {
    $this->db->where('id_petugas', $id);
    $this->db->update('t_petugas', $data);
  }
}