<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambahjadwaldosen extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'dosen/tambahjadwaldosen';
		$this->load->view('dosen/template', $isi);
	}
}
