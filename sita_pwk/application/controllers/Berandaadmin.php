<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class berandaadmin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('akses') != "Admin") {
			if($this->session->userdata('akses') == "Dosen") {
				$url = base_url('berandadosen');
				redirect($url);
			}else{
				$url = base_url('berandamahasiswa');
				redirect($url);
			}
		}
	}

	public function index()
	{
		$isi['konten'] = 'admin/beranda';
		$this->load->view('admin/template', $isi);
	}
}
