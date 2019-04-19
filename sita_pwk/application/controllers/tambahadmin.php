<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambahadmin extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'admin/tambahadmin';
		$this->load->view('admin/template', $isi);
	}
}
