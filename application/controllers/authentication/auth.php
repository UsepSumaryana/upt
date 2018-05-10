<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends My_controller
{

  public function cekAkun()
  {
    //load model_users
    $this->load->model('m_auth');

    //membuat validasi login
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $query = $this->m_auth->cekAkun($username, $password);

    if ($query === 1) {
      return "User Tidak Ditemukan!";
    }

      $userData = array(
        'username' => $query->username,
        'level' => $query->level,
        'logged_in' => TRUE
      );
      $this->session->set_userdata($userData);
      return TRUE;
    
  }

  public function login()
  {
    //melakukan pengalihan halaman sesuai dengan levelnya
    

    //proses login dan validasi nya
    if (!empty($this->input->post('password'))) {
      $this->load->model('m_auth');
      $this->form_validation->set_rules('username', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required');
      $error = $this->cekAkun();
      if ($this->form_validation->run() && $error === TRUE) {
        $data = $this->m_auth->cekAkun($this->input->post('username'), $this->input->post('password'));

        //jika bernilai TRUE maka alihkan halaman sesuai dengan level nya
        if($data->level == 'admin'){
          redirect('datamaster');
        }
        else if($data->level == 'upt'){
          redirect('home');
        }
      }

      //Jika bernilai FALSE maka tampilkan error
      else{
        redirect('welcome','refresh');
      }
    }
    //Jika tidak maka alihkan kembali ke halaman login
    else{
      redirect('welcome','refresh');
    }
  }


  public function logout()
  {
    //Menghapus semua session (sesi)
    $this->session->sess_destroy();
    redirect('welcome');
  }
}
