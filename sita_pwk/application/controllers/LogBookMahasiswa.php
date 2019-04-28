<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogBookMahasiswa extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'mahasiswa/LogBook';
		$this->load->view('mahasiswa/header', $isi);

	}
}
