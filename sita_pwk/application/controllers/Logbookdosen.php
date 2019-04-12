<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logbookdosen extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'dosen/logbookdosen';
		$this->load->view('dosen/template', $isi);
	}
}
