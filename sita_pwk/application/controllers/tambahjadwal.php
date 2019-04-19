<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambahjadwal extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'admin/tambahjadwal';
		$this->load->view('admin/template', $isi);
	}
}
