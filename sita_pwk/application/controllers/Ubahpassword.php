<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubahpassword extends CI_Controller {

	public function index()
	{
    $this->load->view('admin/ubahpassword');
	}

  public function update_password_admin(){
    $this->load->model('admin_model');
    $old_pass=$this->input->post('old_pass');
		$new_pass=$this->input->post('new_pass');
		$confirm_pass=$this->input->post('confirm_pass');
    $id_admin = $this->session->userdata('ses_id');
    $cek_pw_lama = $this->admin_model->cek_pw_lama($old_pass);

    if($cek_pw_lama->num_rows() > 0){
      if($new_pass == $confirm_pass) {
        $this->admin_model->updatePassword($new_pass,$id_admin);
        $this->session->set_flashdata('sukses', 'Sukses!');
        redirect(base_url('ubahpassword'));
      }else {
        $this->session->set_flashdata('error', 'Confirm Password & New Password Harus Sama!');
        redirect(base_url('ubahpassword'));
      }
    }else {
      $this->session->set_flashdata('error', 'Password Lama Salah!');;
      redirect(base_url('ubahpassword'));
    }
  }

  public function update_password_dosen(){
    $this->load->model('dosen_model');
    $old_pass=$this->input->post('old_pass');
    $new_pass=$this->input->post('new_pass');
    $confirm_pass=$this->input->post('confirm_pass');
    $nip = $this->session->userdata('ses_id');
    $cek_pw_lama = $this->dosen_model->cek_pw_lama($old_pass);

    if($cek_pw_lama->num_rows() > 0){
      if($new_pass == $confirm_pass) {
        $this->admin_model->updatePassword($new_pass,$nip);
        $this->session->set_flashdata('sukses', 'Sukses!');
        // redirect(base_url('ubahpassword'));
      }else {
        $this->session->set_flashdata('error', 'Password Baru & Konfirmasi Harus Sama!');
        // redirect(base_url('ubahpassword'));
      }
    }else {
      $this->session->set_flashdata('error', 'Password Lama Salah!');;
      // redirect(base_url('ubahpassword'));
    }
  }


}
