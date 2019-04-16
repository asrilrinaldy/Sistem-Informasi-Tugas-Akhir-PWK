<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kelolamahasiswa extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'admin/mahasiswa/kelolamahasiswa';
		$this->load->view('admin/template', $isi);
	}
}
