<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerandaMahasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('akses') != "Mahasiswa") {
			if($this->session->userdata('akses') == "Dosen") {
				$url = base_url('dosen/berandadosen');
				redirect($url);
			}else{
				$url = base_url('admin/berandaadmin');
				redirect($url);
			}
		}

	}

	public function index()
	{
		$isi['konten'] = 'mahasiswa/berandamahasiswa';
		$this->load->view('mahasiswa/header', $isi);
	}

}
