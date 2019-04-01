<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  public function __construct()
	{
    parent::__construct();

		$this->load->model('login_model');
	}

	public function index()
	{
		$this->load->view('login_view');
	}

  public function login (){
    $username = htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
    $password = htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

    $cek_admin=$this->login_model->cek_admin($username,$password);
    $cek_dosen=$this->login_model->cek_dosen($username,$password);

    if($cek_admin->num_rows() > 0){
      $data=$cek_admin->row_array();
      $this->session->set_userdata('masuk',TRUE);
      $this->session->set_userdata('akses','Admin');
      $this->session->set_userdata('ses_id',$data['id_admin']);
      $this->session->set_userdata('ses_nama',$data['nama']);
      redirect('page');
    }else if ($cek_dosen->num_rows() > 0) {
      $data=$cek_dosen->row_array();
      $this->session->set_userdata('masuk',TRUE);
      $this->session->set_userdata('akses','Dosen');
      $this->session->set_userdata('ses_id',$data['NIP']);
      $this->session->set_userdata('ses_nama',$data['Nama']);
      redirect('page');
    }else{
          $cek_mahasiswa = $this->login_model->cek_mhs($username,$password);
          if($cek_mahasiswa->num_rows() > 0){
            $data=$cek_mahasiswa->row_array();
            $this->session->set_userdata('masuk',TRUE);
            $this->session->set_userdata('akses','Mahasiswa');
            $this->session->set_userdata('ses_id',$data['NIM']);
            $this->session->set_userdata('ses_nama',$data['Nama']);
            redirect('page');
          }else{
            $url=base_url('index.php/login');
            redirect($url);
          }
        }
  }

  function logout(){
    $this->session->sess_destroy();
    $url=base_url();
    redirect($url);
  }

}
