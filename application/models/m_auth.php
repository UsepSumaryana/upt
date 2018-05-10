<?php
  class M_auth extends CI_Model {

    //mengambil tabel users
    public $table = 't_petugas';

    public function cekAkun($username, $password)
    {
      //cari username lalu lakukan validasi
      $this->db->where('username', $username);
      $query = $this->db->get($this->table)->row();

      //jika bernilai 1 maka user tidak ditemukan
      if (!$query) return 1;

      return $query;
    }

  }
