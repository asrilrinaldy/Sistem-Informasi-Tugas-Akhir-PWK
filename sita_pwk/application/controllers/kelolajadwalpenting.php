<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kelolajadwalpenting extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'admin/kelolajadwalpenting';
		$this->load->view('admin/template', $isi);
	}
}
