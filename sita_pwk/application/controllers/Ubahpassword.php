<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubahpassword extends CI_Controller {

  public function __construct()
	{
    parent::__construct();

		$this->load->model('admin_model');
	}

	public function index()
	{
    $isi['konten'] = 'admin/ubahpassword';
    $this->load->view('admin/template', $isi);
	}

  public function update_password_admin(){
    $old_pass=$this->input->post('old_pass');
		$new_pass=$this->input->post('new_pass');
		$confirm_pass=$this->input->post('confirm_pass');
    $id_admin = $this->session->userdata('ses_id');
    $cek_pw_lama = $this->admin_model->cek_pw_lama($old_pass);

    if($cek_pw_lama->num_rows() > 0){
      if($new_pass == $confirm_pass) {
        $this->admin_model->updatePassword($new_pass,$id_admin);
        echo "berhasil ganti";
      }else {
        echo "Password Baru Beda Dengan Confirm";
      }
    }else {
      echo "Password Lama Salah";
    }
  }


}
