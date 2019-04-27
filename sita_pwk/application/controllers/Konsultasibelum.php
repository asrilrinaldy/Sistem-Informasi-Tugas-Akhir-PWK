<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasibelum extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'dosen/konsultasi/konsultasibelum';
		$this->load->view('dosen/template', $isi);
	}
}
