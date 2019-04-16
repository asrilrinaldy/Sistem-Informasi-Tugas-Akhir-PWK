<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerandaMahasiswa extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'mahasiswa/berandamahasiswa';
		$this->load->view('mahasiswa/template', $isi);
	}
}
