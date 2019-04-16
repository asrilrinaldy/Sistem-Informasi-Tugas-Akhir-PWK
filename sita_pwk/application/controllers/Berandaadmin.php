<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class berandaadmin extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'admin/beranda';
		$this->load->view('admin/template', $isi);
	}
}
