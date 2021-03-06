<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('login_model');
    $this->load->model('dosen_model');
  }

  public function index()
  {
    $this->load->view('login_view2');
  }

  public function register()
  {
    $this->load->view('daftar_view');
  }

  public function login()
  {
    $username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES); // mengambil email yg dimasukkan
    $password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES); // // mengambil password yg dimasukkan

    $cek_admin = $this->login_model->cek_admin($username, $password);
    $cek_dosen = $this->login_model->cek_dosen($username, $password);

    if ($cek_admin->num_rows() > 0) {
      $data = $cek_admin->row_array();
      //Set data user dari DB ke Session
      $this->session->set_userdata('masuk', TRUE);
      $this->session->set_userdata('akses', 'Admin');
      $this->session->set_userdata('ses_id', $data['id_admin']);
      $this->session->set_userdata('ses_nama', $data['nama']);
      $this->session->set_userdata('ses_email', $data['email']);
      $this->session->set_userdata('ses_no_telp', $data['no_telp']);
      $this->session->set_userdata('ses_alamat', $data['alamat']);
      $this->session->set_userdata('ses_foto', $data['foto']);
      redirect('admin/berandaadmin');
    } else if ($cek_dosen->num_rows() > 0) {
      //Set data user dari DB ke Session
      $data = $cek_dosen->row_array();
      $this->session->set_userdata('masuk', TRUE);
      $this->session->set_userdata('akses', 'Dosen');
      $this->session->set_userdata('ses_id', $data['NIP']);
      $this->session->set_userdata('ses_nama', $data['Nama']);
      $this->session->set_userdata('ses_email', $data['Email']);
      $this->session->set_userdata('ses_no_telp', $data['No_telepon']);
      $this->session->set_userdata('ses_alamat', $data['Alamat']);
      $this->session->set_userdata('ses_foto', $data['foto']);
      redirect('dosen/berandadosen');
    } else {
      $cek_mahasiswa = $this->login_model->cek_mhs($username, $password);
      //Set data user dari DB ke Session
      if ($cek_mahasiswa->num_rows() > 0) {
        $data = $cek_mahasiswa->row_array();
        $this->session->set_userdata('masuk', TRUE);
        $this->session->set_userdata('akses', 'Mahasiswa');
        $this->session->set_userdata('ses_id', $data['NIM']);
        $this->session->set_userdata('ses_nama', $data['Nama']);
        $this->session->set_userdata('ses_email', $data['Email']);
        $this->session->set_userdata('ses_no_telp', $data['No_telepon']);
        $this->session->set_userdata('ses_alamat', $data['Alamat']);
        $this->session->set_userdata('ses_judulta', $data['Judul_TA']);
        $this->session->set_userdata('ses_foto', $data['foto']);
        $this->session->set_userdata('ses_nippembimbing', $data['Pembimbing']);
        $this->session->set_userdata('ses_nippembimbing2', $data['Pembimbing2']);
        $dosen1 = $this->dosen_model->get_dosen($data['Pembimbing'])->row_array();
        $dosen2 = $this->dosen_model->get_dosen($data['Pembimbing2'])->row_array();
        $this->session->set_userdata('ses_pembimbing', $dosen1['Nama']);
        $this->session->set_userdata('ses_pembimbing2', $dosen2['Nama']);
        redirect('mahasiswa/berandamahasiswa');
      } else {
        $this->session->set_flashdata('error', 'Username / Password Salah!');
        $url = base_url('login');
        redirect($url);
      }
    }
  }

  function logout()
  {
    $this->session->sess_destroy();
    $url = base_url();
    redirect($url);
  }
}
