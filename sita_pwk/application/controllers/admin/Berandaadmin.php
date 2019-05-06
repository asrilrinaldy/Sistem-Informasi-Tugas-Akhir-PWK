<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class berandaadmin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('akses') != "Admin") {
			if($this->session->userdata('akses') == "Dosen") {
				$url = base_url('dosen/berandadosen');
				redirect($url);
			}else{
				$url = base_url('mahasiswa/berandamahasiswa');
				redirect($url);
			}
		}
	}

	public function index()
	{
		$isi['konten'] = 'admin/berandaadmin';
		$this->load->view('admin/template', $isi);
	}
}
