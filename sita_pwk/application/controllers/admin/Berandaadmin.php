<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class berandaadmin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Start Untuk mengecek kalau yg akses adalah admin
		if($this->session->userdata('akses') != "Admin") {
			if($this->session->userdata('akses') == "Dosen") {// Jika Dosen berusaha akses maka akan di redirect ke halaman dosen
				$url = base_url('dosen/berandadosen');
				redirect($url);
			}else{// Jika Mahasiswa berusaha akses maka akan di redirect ke halaman mahasiswa
				$url = base_url('mahasiswa/berandamahasiswa');
				redirect($url);
			}

		}
	}
	//END Untuk mengecek kalau yg akses adalahadmin

	public function index()
	{
		$isi['konten'] = 'admin/berandaadmin';
		$this->load->view('admin/template', $isi);
	}
}
