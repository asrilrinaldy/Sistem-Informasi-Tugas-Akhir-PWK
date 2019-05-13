<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berandadosen extends CI_Controller {

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
		$isi['jumlah_konsul'] = $this->mahasiswa_model->jumlah_konsul($nip); //Mengambil jumlah konsultasi yang belum diperiksa untuk ditampilkan di icon
		$isi['konten'] = 'dosen/berandadosen';
		$this->load->view('dosen/template', $isi);
	}
}
