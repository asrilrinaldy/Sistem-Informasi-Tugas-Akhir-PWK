<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'beranda';
		$this->load->view('header', $isi);
	}
}
