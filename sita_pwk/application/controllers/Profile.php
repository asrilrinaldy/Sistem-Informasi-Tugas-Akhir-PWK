<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin_model');
    $this->load->helper(array('form', 'url'));
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
    $foto;

    //Start Upload Foto
    $config['upload_path']          = './assets/upload/foto/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 0;
    $config['max_width']            = 0;
    $config['max_height']           = 0;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('foto'))
    {
            $this->session->set_flashdata('error', 'Gagal Upload Foto');
            redirect(base_url('profile/admin'));
    }
    else
    {
            $data = array('upload_data' => $this->upload->data());
            $foto = $this->upload->data('file_name');
    }
    //End Upload Foto


    $result = $this->admin_model->update_profile($id_admin,$nama,$email,$no_telepon,$alamat,$foto);
    if($result > 0) {
        $this->session->set_userdata('ses_nama', $nama);
        $this->session->set_userdata('ses_email', $email);
        $this->session->set_userdata('ses_no_telp', $no_telepon);
        $this->session->set_userdata('ses_alamat', $alamat);
        $this->session->set_userdata('ses_foto', $foto);
        $this->session->set_flashdata('sukses', 'Sukses!');
        redirect(base_url('profile/admin'));
      }else {
        $this->session->set_flashdata('error', 'Gagal Megubah Profil!');
        redirect(base_url('profile/admin'));
      }

  }

}
