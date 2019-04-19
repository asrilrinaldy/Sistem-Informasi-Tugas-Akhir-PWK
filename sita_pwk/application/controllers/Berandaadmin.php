<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class berandaadmin extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'admin/berandaadmin';
		$this->load->view('admin/template', $isi);
	}
}
