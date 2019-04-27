<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berandadosen extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('akses') != "Dosen") {
			if($this->session->userdata('akses') == "Mahasiswa") {
				$url = base_url('berandamahasiswa');
				redirect($url);
			}else{
				$url = base_url('berandaadmin');
				redirect($url);
			}
		}
	}

	public function index()
	{
		$isi['konten'] = 'dosen/berandadosen';
		$this->load->view('dosen/template', $isi);
	}
}
