<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerandaMahasiswa extends CI_Controller {

<<<<<<< HEAD
	public function index()
	{
		$isi['konten'] = 'mahasiswa/berandamahasiswa';
		$this->load->view('mahasiswa/template', $isi);
=======
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('akses') != "Mahasiswa") {
			if($this->session->userdata('akses') == "Dosen") {
				$url = base_url('berandadosen');
				redirect($url);
			}else{
				$url = base_url('berandaadmin');
				redirect($url);
			}
		}
	}

	public function index()
	{
		$isi['konten'] = 'mahasiswa/berandamahasiswa';
		$this->load->view('mahasiswa/header', $isi);
>>>>>>> master
	}
}
