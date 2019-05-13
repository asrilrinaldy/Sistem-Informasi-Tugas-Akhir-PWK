<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasibelum extends CI_Controller {

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
		$nip = $this->session->userdata('ses_id');
		$this->load->model('mahasiswa_model');
		$isi['jumlah_konsul'] = $this->mahasiswa_model->jumlah_konsul($nip);
		$isi['konten'] = 'dosen/konsultasi/konsultasibelum';
		$this->load->view('dosen/template', $isi);
	}

	public function konsul_data(){
		$this->load->model('mahasiswa_model');
		$nip = $this->session->userdata('ses_id'); //Mengambil nip dosen yg sedang login
		$data=$this->mahasiswa_model->get_konsul_nip($nip); //Mengambil data mahasiswa yang pembimbingnya dosen yg login
		echo json_encode($data);
	}

	public function periksa_konsul(){
		$this->load->model('mahasiswa_model');
		$data=$this->mahasiswa_model->periksa_konsul(); //
		echo json_encode($data);
	}
}
