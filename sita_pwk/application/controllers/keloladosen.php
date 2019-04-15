<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class keloladosen extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'admin/dosen/keloladosen';
		$this->load->view('admin/template', $isi);
	}
}
