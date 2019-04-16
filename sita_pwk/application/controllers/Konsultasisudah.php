<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsultasisudah extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'dosen/konsultasi/konsultasisudah';
		$this->load->view('dosen/template', $isi);
	}
}
