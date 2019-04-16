<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class konsultasiMahasiswa extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'mahasiswa/konsultasi';
		$this->load->view('mahasiswa/template', $isi);
	}
}
