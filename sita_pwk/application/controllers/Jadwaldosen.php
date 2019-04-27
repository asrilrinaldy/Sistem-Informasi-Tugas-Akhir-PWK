<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwaldosen extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'dosen/jadwaldosen';
		$this->load->view('dosen/template', $isi);
	}
}
