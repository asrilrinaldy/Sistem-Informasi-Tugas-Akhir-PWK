<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasisudah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Start Untuk mengecek kalau yg akses adalah dosen
		if($this->session->userdata('akses') != "Dosen") {
			if($this->session->userdata('akses') == "Mahasiswa") { //Jika user lain coba akses akan di redirect ke halaman bersesuaian
				$url = base_url('mahasiswa/berandamahasiswa');
				redirect($url);
			}else{
				$url = base_url('admin/berandaadmin'); //Jika user lain coba akses akan di redirect ke halaman bersesuaian
				redirect($url);
			}
		}
		//END Untuk mengecek kalau yg akses adalah dosen
	}

	public function index()
	{
		$nip = $this->session->userdata('ses_id'); // menngambil nip dosen yg login
		$this->load->model('mahasiswa_model');
		$isi['jumlah_konsul'] = $this->mahasiswa_model->jumlah_konsul($nip); // mengambi jumlah konsultasi yang belum diperiksa oleh dosen yg login
		$isi['konten'] = 'dosen/konsultasi/konsultasisudah';
		$this->load->view('dosen/template', $isi);
	}

	public function konsul_data(){
		$this->load->model('mahasiswa_model');
		$nip = $this->session->userdata('ses_id'); // menngambil nip dosen yg login
		$data=$this->mahasiswa_model->get_konsul_nip_sudah($nip); // mengambil konsul yg sudah diperiksa dosen yg login
		echo json_encode($data);
	}
}
