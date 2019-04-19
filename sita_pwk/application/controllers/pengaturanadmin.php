<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengaturanadmin extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'admin/pengaturanadmin';
		$this->load->view('admin/template', $isi);
	}
}
