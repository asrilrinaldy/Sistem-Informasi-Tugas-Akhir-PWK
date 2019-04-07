<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

  public function __construct()
	{
    parent::__construct();

		$this->load->model('register_model');
	}

	public function index()
	{
		$this->load->view('register_view');
	}

  public function check_register()
    {
      $site = $this->Konfigurasi_model->listing();
      $data = array(
          'title'     => 'Register | '.$site['nama_website'],
          'favicon'   => $site['favicon'],
          'site'      => $site
      );
      $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[50]');
      $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[5]|max_length[50]');
      $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[20]');
      if ($this->form_validation->run() == false) {
        $this->template->load('authentication/layout/template','authentication/register',$data);
      }
      else {
        $this->Auth_model->reg();
        $this->session->set_flashdata('alert', '<p class="box-msg">
          <div class="info-box alert-success">
          <div class="info-box-icon">
          <i class="fa fa-check-circle"></i>
          </div>
          <div class="info-box-content" style="font-size:14">
          <b style="font-size: 20px">SUKSES</b><br>Pendaftaran berhasil, silakan login.</div>
          </div>
          </p>
        ');
        redirect('login','refresh',$data);
      }
    }

  function logout(){
    $this->session->sess_destroy();
    $url=base_url();
    redirect($url);
  }

}
