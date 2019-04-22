<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class editjadwal extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'admin/editjadwal';
		$this->load->view('admin/template', $isi);
	}
}
