<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('admin_model');
  }

  public function admin()
  {
    $this->load->view('admin/profileadmin');
  }

  public function update_admin(){
    $id_admin=$this->input->post('id_admin');
		$nama=$this->input->post('nama');
    $email=$this->input->post('email');
    $no_telepon=$this->input->post('no_telepon');
    $alamat=$this->input->post('alamat');

    $result = $this->admin_model->update_profile($id_admin,$nama,$email,$no_telepon,$alamat);
    if($result > 0) {
      $this->session->set_userdata('ses_nama', $nama);
      $this->session->set_userdata('ses_email', $email);
      $this->session->set_userdata('ses_no_telp', $no_telepon);
      $this->session->set_userdata('ses_alamat', $alamat);
      $this->session->set_flashdata('sukses', 'Sukses!');
      redirect(base_url('profile/admin'));
    }else {
      $this->session->set_flashdata('error', 'Gagal Megubah Profil!');
      redirect(base_url('profile/admin'));
    }

  }

}
