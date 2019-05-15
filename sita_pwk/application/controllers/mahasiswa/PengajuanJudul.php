<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PengajuanJudul extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'mahasiswa/PengajuanJudul';
		$this->load->view('mahasiswa/header', $isi);
	}
}
