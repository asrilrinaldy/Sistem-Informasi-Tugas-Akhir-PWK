<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berandadosen extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'dosen/berandadosen';
		$this->load->view('dosen/template', $isi);
	}
}
