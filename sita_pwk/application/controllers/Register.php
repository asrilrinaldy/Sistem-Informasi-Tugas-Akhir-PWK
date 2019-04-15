<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();

    $this->load->library('form_validation');
    $this->load->model('Register_model', 'mahasiswa');
  }
  //Dashboard
  public function index()
  {
    $data['title'] = 'Dashboard - SITA PWK';
    $data['metaDescription'] = 'Dashboard';
    $data['metaKeywords'] = 'Dashboard';
    $this->load->view('login_view', $data);
  }
  public function register()
  {
    $data['title'] = 'Register - SITA PWK';
    $data['metaDescription'] = 'Register';
    $data['metaKeywords'] = 'Register';
    $this->load->view('register_view', $data);
  }
  // action register
  public function actionRegister()
  {
    $this->load->library('form_validation');
    // field name, error message, validation rules
    $this->form_validation->set_rules('Nama', 'Nama Lengkap', 'trim|required');
    $this->form_validation->set_rules('NIM', 'NIM', 'trim|required|min_length[4]');
    $this->form_validation->set_rules('Email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');

    $this->form_validation->set_rules('Password', 'Password', 'trim|required|min_length[4]|max_length[32]');
    $this->form_validation->set_rules('Ulangi_password', 'Ulangi Password', 'trim|required|matches[Password]');
    $this->form_validation->set_rules('Alamat', 'Alamat Lengkap', 'trim|required');
    $this->form_validation->set_rules('No_telepon', 'No_telepon', 'trim|required');
    $this->form_validation->set_rules('Tempat_lahir', 'Tempat_lahir', 'trim|required');
    $this->form_validation->set_rules('Tanggal_lahir', 'Tanggal_lahir', 'trim|required');

    if ($this->form_validation->run() == FALSE) {
      $this->register();
    } else {
      // post values
      $Nama = $this->input->post('Nama');
      $NIM = $this->input->post('NIM');
      $Email = $this->input->post('Email');
      $Password = $this->input->post('Password');
      $Alamat = $this->input->post('Alamat');
      $No_telepon = $this->input->post('No_telepon');
      $Tempat_lahir = $this->input->post('Tempat_lahir');
      $Tanggal_lahir = $this->input->post('Tanggal_lahir');
      // set post values
      $this->mahasiswa->setNama($Nama);
      $this->mahasiswa->setNIM($NIM);
      $this->mahasiswa->setEmail($Email);
      $this->mahasiswa->setPassword(MD5($Password));
      $this->mahasiswa->setAlamat($Alamat);
      $this->mahasiswa->setNo_telepon($No_telepon);
      $this->mahasiswa->setTempat_lahir($Tempat_lahir);
      $this->mahasiswa->setTanggal_lahir($Tanggal_lahir);
      // insert values in database
      $this->mahasiswa->createMahasiswa();
      redirect('register/index');
    }
  }
}

function logout()
{
  $this->session->sess_destroy();
  $url = base_url();
  redirect($url);
}
